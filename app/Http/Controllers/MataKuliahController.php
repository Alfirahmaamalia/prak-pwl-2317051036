<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    // 📋 Menampilkan semua data
    public function index()
    {
        $data = [
            'title' => 'List Mata Kuliah',
            'mks'   => MataKuliah::all(),
        ];
        return view('list_mk', $data);
    }

    // ➕ Form tambah data
    public function create()
    {
        return view('create_mk', [
            'title' => 'Tambah Mata Kuliah'
        ]);
    }

    // 💾 Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_kuliah' => 'required|string|max:100',
            'sks'         => 'required|integer|min:1|max:6',
        ]);

        MataKuliah::create([
            'nama_kuliah' => $request->nama_kuliah,
            'sks'         => $request->sks,
        ]);

        return redirect()
            ->route('matakuliah.index')
            ->with('success', 'Data berhasil ditambahkan.');
    }

    // ✏️ Form edit data
    public function edit($id)
    {
        $mk = MataKuliah::findOrFail($id);
        return view('edit_mk', [
            'title' => 'Edit Mata Kuliah',
            'mk'    => $mk,
        ]);
    }

    // 🔄 Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kuliah' => 'required|string|max:100',
            'sks'         => 'required|integer|min:1|max:6',
        ]);

        $mk = MataKuliah::findOrFail($id);
        $mk->update([
            'nama_kuliah' => $request->nama_kuliah,
            'sks'         => $request->sks,
        ]);

        return redirect()
            ->route('matakuliah.index')
            ->with('success', 'Data berhasil diperbarui.');
    }

    // ❌ Hapus data
    public function destroy($id)
    {
        $mk = MataKuliah::findOrFail($id);
        $mk->delete();

        return redirect()
            ->route('matakuliah.index')
            ->with('success', 'Data berhasil dihapus.');
    }
}
