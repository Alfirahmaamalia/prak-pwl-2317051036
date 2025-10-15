@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Edit Mata Kuliah</h1>

    <form action="{{ route('matakuliah.update', $mk->uuid) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <!-- Input Nama Mata Kuliah -->
        <div>
            <label for="nama_kuliah" class="block text-sm font-medium text-gray-700">Nama Mata Kuliah</label>
            <input type="text" id="nama_kuliah" name="nama_kuliah"
                   value="{{ old('nama_kuliah', $mk->nama_kuliah) }}"
                   required
                   class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm
                          focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
        </div>

        <!-- Input SKS -->
        <div>
            <label for="sks" class="block text-sm font-medium text-gray-700">SKS</label>
            <input type="number" id="sks" name="sks" 
                   value="{{ old('sks', $mk->sks) }}"
                   required
                   class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm 
                          focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
        </div>

        <!-- Tombol Aksi -->
        <div class="flex justify-end space-x-3">
            <a href="{{ route('matakuliah.index') }}" 
               class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-lg shadow">
               Batal
            </a>
            <button type="submit" 
                class="bg-gray-800 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow">
                Update
            </button>
        </div>
    </form>
</div>
@endsection
