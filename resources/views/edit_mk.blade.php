@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto mt-10 bg-white p-6 rounded-xl shadow">
    <h2 class="text-xl font-bold mb-4 text-gray-800">Edit Mata Kuliah</h2>

    <form action="{{ route('matakuliah.update', $mk->uuid) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold mb-1">Nama Mata Kuliah</label>
            <input type="text" name="nama_kuliah" class="w-full border px-3 py-2 rounded"
                   value="{{ old('nama_kuliah', $mk->nama_kuliah) }}" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Jumlah SKS</label>
            <input type="number" name="sks" class="w-full border px-3 py-2 rounded"
                   value="{{ old('sks', $mk->sks) }}" min="1" max="6" required>
        </div>

        <div class="flex justify-end gap-2">
            <a href="{{ route('matakuliah.index') }}" class="bg-gray-300 px-4 py-2 rounded">Batal</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Update
            </button>
        </div>
    </form>
</div>
@endsection
