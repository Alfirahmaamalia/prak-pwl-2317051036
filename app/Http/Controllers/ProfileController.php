<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
<<<<<<< HEAD
    public function profile($nama="", $npm="", $kelas=""){
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas,
        ];
        return view('profile', $data);
    }
}
=======
    public function profile($nama = "", $npm = "", $kelas = ""){
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas
        ];

    return view('profile', $data);
}
}
>>>>>>> origin/update-delete
