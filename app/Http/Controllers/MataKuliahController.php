<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'List Mata Kuliah',
            'mks'   => MataKuliah::all(),
        ];
        return view('list_mk', $data);
    }

    public function create()
    {
        return view('create_mk', [
            'title' => 'Create Mata Kuliah'
        ]);
    }

    public function store(Request $request)
    {
        MataKuliah::create([
            'mata_kuliah' => $request->input('mata_kuliah'),
            'sks'         => $request->input('sks'),
        ]);

        return redirect()->to('/matakuliah');
    }
}
