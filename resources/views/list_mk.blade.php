@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10">

@if (session('success'))
    <div id="alert"
         class="fixed top-10 left-1/2 transform -translate-x-1/2 -translate-y-1/2 
                bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg z-50
                transition-all duration-500 text-center">
        {{ session('success') }}
    </div>

    <script>
        setTimeout(() => {
            const alertBox = document.getElementById('alert');
            if (alertBox) {
                alertBox.style.opacity = "0";
                alertBox.style.transform = "translate(-50%, -50%) scale(0.9)";
                alertBox.style.transition = "all 0.5s ease";
                setTimeout(() => alertBox.remove(), 500);
            }
        }, 5000); // hilang setelah 5 detik
    </script>
@endif




    {{-- Header --}}
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-gray-800">Data Mata Kuliah</h1>
        <a href="{{ route('matakuliah.create') }}"
           class="bg-gray-900 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition">
            + Tambah Data
        </a>
    </div>

    {{-- Tabel --}}
    <div class="bg-white rounded-2xl shadow overflow-hidden">
        <div class="bg-cyan-800 text-white font-semibold px-4 py-3">Daftar Mata Kuliah</div>
        <table class="min-w-full text-sm text-gray-700">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">NO</th>
                    <th class="px-4 py-2 text-left">NAMA MATA KULIAH</th>
                    <th class="px-4 py-2 text-left">SKS</th>
                    <th class="px-4 py-2 text-left">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mks as $index => $mk)
                    <tr class="{{ $loop->even ? 'bg-white' : 'bg-yellow-50' }}">
                        <td class="px-4 py-2">{{ $index + 1 }}</td>
                        <td class="px-4 py-2">{{ $mk->nama_kuliah }}</td>
                        <td class="px-4 py-2">{{ $mk->sks }}</td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('matakuliah.edit', $mk->uuid) }}"
                               class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">Edit</a>
                            <form action="{{ route('matakuliah.destroy', $mk->uuid) }}" method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-gray-500">
                            Belum ada data mata kuliah.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
