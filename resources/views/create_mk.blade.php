@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Buat Mata Kuliah Baru</h1>

    <form action="{{ route('matakuliah.store') }}" method="POST" class="space-y-5">
        @csrf
        
        <!-- Input Nama Mata Kuliah -->
        <div>
            <label for="nama_kuliah" class="block text-sm font-medium text-gray-700">
                Nama Mata Kuliah
            </label>
            <input type="text" id="nama_kuliah" name="nama_kuliah"
                   class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm
                          focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                   placeholder="Masukkan nama mata kuliah" required>
        </div>

        <!-- Input SKS -->
        <div>
            <label for="sks" class="block text-sm font-medium text-gray-700">SKS</label>
            <input type="number" id="sks" name="sks"
                   class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm
                          focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                   min="1" max="6" placeholder="Masukkan jumlah SKS" required>
        </div>

        <!-- Tombol Submit -->
        <div class="flex justify-end">
            <button type="submit"
                    class="bg-gray-800 hover:bg-gray-900 text-white px-5 py-2 rounded-lg shadow">
                Submit
            </button>
        </div>
    </form>
</div>
@endsection
