<?php
include 'connect.php';

// Cek Apakah ada data yang dikirim
if (isset($_POST['create'])) {
    $judul = $_POST["judul"];
    $namaPenulis = $_POST["penulis"];
    $tahunBuku = $_POST["tahun_terbit"];

    // Definisikan query untuk insert data
    $query = "INSERT INTO tb_buku (judul, penulis, tahun_terbit)
    VALUES ('$judul', '$namaPenulis', '$tahunBuku')";
    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>