@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto mt-10 bg-white p-6 rounded-xl shadow">
    <h2 class="text-xl font-bold mb-4 text-gray-800">Tambah Mata Kuliah</h2>

    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block font-semibold mb-1">Nama Mata Kuliah</label>
            <input type="text" name="mata_kuliah" class="w-full border px-3 py-2 rounded"
                   value="{{ old('mata_kuliah') }}" required>
            @error('mata_kuliah')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Jumlah SKS</label>
            <input type="number" name="sks" class="w-full border px-3 py-2 rounded"
                   value="{{ old('sks') }}" min="1" max="6" required>
            @error('sks')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end gap-2">
            <a href="{{ route('matakuliah.index') }}" class="bg-gray-300 px-4 py-2 rounded">Batal</a>
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
