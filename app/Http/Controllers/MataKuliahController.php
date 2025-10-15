<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    // 📋 List data mata kuliah
    public function index()
    {
        return view('list_mk', [
            'title' => 'List Mata Kuliah',
            'mks'   => MataKuliah::all(),
        ]);
    }

    // ➕ Form tambah
    public function create()
    {
        return view('create_mk', [
            'title' => 'Tambah Mata Kuliah',
        ]);
    }

    // 💾 Simpan data
    public function store(Request $request)
    {
        $request->validate([
            'mata_kuliah' => 'required|string|max:100',
            'sks'         => 'required|integer|min:1|max:6',
        ]);

        MataKuliah::create([
            'nama_kuliah' => $request->mata_kuliah,
            'sks'         => $request->sks,
        ]);

        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil ditambahkan!');
    }

    // ✏️ Form edit
    public function edit($uuid)
    {
        $mk = MataKuliah::findOrFail($uuid);

        return view('edit_mk', [
            'title' => 'Edit Mata Kuliah',
            'mk'    => $mk,
        ]);
    }

    // 🔄 Update data
    public function update(Request $request, $uuid)
    {
        $request->validate([
            'nama_kuliah' => 'required|string|max:100',
            'sks'         => 'required|integer|min:1|max:6',
        ]);

        $mk = MataKuliah::findOrFail($uuid);
        $mk->update([
            'nama_kuliah' => $request->nama_kuliah,
            'sks'         => $request->sks,
        ]);

        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil diperbarui!');
    }

    // ❌ Hapus data
    public function destroy($uuid)
    {
        $mk = MataKuliah::findOrFail($uuid);
        $mk->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil dihapus!');
    }
}
