<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Set timezone ke Asia/Jakarta
        // - Buat variabel nama, jam, waktu
        // - Tentukan $salam berdasarkan jam (pagi, siang, sore, malam)
        // - Panggil fungsi getTanggal()
        // - Kirim data ke view 'dashboard' 
    }

    private function getTanggal()
    {
        // ==================3==================
        // - Kembalikan tanggal sekarang dalam format dd-mm-yyyy
    }
}
