<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        $mahasiswa = (object)[
            'nama' => 'Sheila Deninta Maharani',
            'nim' => '1202223324',
            'email' => 'sheiladeninta@student.telkomuniversity.ac.id',
            'jurusan' => 'Sistem Informasi',
            'fakultas' => 'Fakultas Rekayasa Industri',
            'foto' => asset('images/foto-sheila.jpg')
        ];
        // - Kirim object tersebut ke view 'profil'
        return view('profil', ['mahasiswa' => $mahasiswa]);
    }
}
