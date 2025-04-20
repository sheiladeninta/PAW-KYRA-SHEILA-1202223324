<!-- BUAT FUNGSI EDIT DATA ( ketika data berhasil di tambahkan maka akan dialihkan ke halaman katalog buku) -->
<?php
include('connect.php');

if (isset($_POST['update']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $penulis = mysqli_real_escape_string($conn, $_POST['penulis']);
    $tahun_terbit = mysqli_real_escape_string($conn, $_POST['tahun_terbit']);

    $query = "UPDATE tb_buku SET judul = '$judul', penulis = '$penulis', tahun_terbit = '$tahun_terbit' WHERE id = '$id'";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: katalog_buku.php");
        exit();
    } else {
        echo "<script>alert('Data gagal diperbarui!'); window.location='edit_buku.php?id=$id';</script>";
    }
} else {
    echo "<script>alert('Akses tidak valid!'); window.location='katalog_buku.php';</script>";
}
?>
