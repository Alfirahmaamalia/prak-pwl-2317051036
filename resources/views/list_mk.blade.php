@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Data Mata Kuliah</h1>
        <a href="{{ route('matakuliah.create') }}" 
           class="bg-gray-800 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow">
           + Tambah Mata Kuliah
        </a>
    </div>

    <div class="overflow-hidden rounded-lg shadow-lg border border-gray-200">
        <!-- Header Tabel -->
        <div class="bg-cyan-700 text-white px-6 py-3 font-semibold">
            Daftar Mata Kuliah
        </div>

        <!-- Isi Tabel -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white text-sm">
                <thead>
                    <tr class="bg-gray-100 text-gray-700 uppercase text-xs">
                        <th class="px-6 py-3 text-left">No.</th>
                        <th class="px-6 py-3 text-left">Nama Mata Kuliah</th>
                        <th class="px-6 py-3 text-left">SKS</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mks as $index => $mk)
                    <tr class="{{ $loop->even ? 'bg-gray-50' : 'bg-white' }} hover:bg-amber-50 transition">
                        <td class="px-6 py-4">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 font-medium text-gray-800">{{ $mk->nama_kuliah }}</td>
                        <td class="px-6 py-4">{{ $mk->sks }}</td>
                        <td class="px-6 py-4 text-center">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('matakuliah.edit', $mk->uuid) }}"
                                   class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-md shadow text-xs">
                                   Edit
                                </a>
                                <form action="{{ route('matakuliah.destroy', $mk->uuid) }}" method="POST"
                                      onsubmit="return confirm('Yakin ingin menghapus data ini?')"
                                      class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md shadow text-xs">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                    @if($mks->isEmpty())
                    <tr>
                        <td colspan="4" class="text-center text-gray-500 py-6">Tidak ada data mata kuliah.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
