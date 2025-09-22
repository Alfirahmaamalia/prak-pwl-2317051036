<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "", $npm = "", $kelas = "",$foto = ""){
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas,
            'foto' => $foto
        ];

    return view('profile', $data);
}
}