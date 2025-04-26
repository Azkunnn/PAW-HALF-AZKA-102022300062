<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa = (object) [
        'nama' => "Muhammad Azka As-sidqi", 
        'nim' => '102022300062', 
        'prodi' => 'Sistem Informasi', 
        'email' => 'azkaassidqi32gmail.com', 
        'fakultas' => 'Fakultas Rekayasa Industri', 
        'foto' => asset(path : "images\Azkunn.jpg")];

        return view(view:'profil', data : ['mahasiswa' => $mahasiswa]);
    }
}
