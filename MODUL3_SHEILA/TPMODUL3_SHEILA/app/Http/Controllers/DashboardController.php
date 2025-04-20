<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Set timezone ke Asia/Jakarta
        date_default_timezone_set('Asia/Jakarta');
        // - Buat variabel nama, jam, waktu
        $nama = 'Sheila Deninta Maharani';
        $jam = date('H');
        $waktu = date('H:i:s');
        // - Tentukan $salam berdasarkan jam (pagi, siang, sore, malam)
        if ($jam >= 5 && $jam <= 11) {
            $salam = 'Selamat Pagi';
        } elseif ($jam >= 12 && $jam <= 14) {
            $salam = 'Selamat Siang';
        } elseif ($jam >= 15 && $jam <= 17) {
            $salam = 'Selamat Sore';
        } else {
            $salam = 'Selamat Malam';
        }
        // - Panggil fungsi getTanggal()
        $tanggal = $this->getTanggal();
        // - Kirim data ke view 'dashboard'
        return view('dashboard', compact('nama', 'waktu', 'tanggal', 'salam'));
    }

    private function getTanggal()
    {
        // ==================3==================
        // - Kembalikan tanggal sekarang dalam format dd-mm-yyyy
        return date('d-m-Y');
    }
}
