@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Data Pengguna</h1>
        <a href="{{ route('user.create') }}" 
           class="bg-gray-800 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow">
           + Tambah Data
        </a>
    </div>

    <div class="overflow-hidden rounded-lg shadow-lg border border-gray-200">
        <!-- Header Tabel -->
        <div class="bg-cyan-700 text-white px-6 py-3 font-semibold">
            Daftar Pengguna
        </div>

        <!-- Isi Tabel -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white text-sm">
                <thead>
                    <tr class="bg-gray-100 text-gray-700 uppercase text-xs">
                        <th class="px-6 py-3 text-left">No.</th>
                        <th class="px-6 py-3 text-left">Nama</th>
                        <th class="px-6 py-3 text-left">NPM</th>
                        <th class="px-6 py-3 text-left">Kelas</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                    <tr class="{{ $loop->even ? 'bg-gray-50' : 'bg-white' }} hover:bg-amber-50 transition">
                        <td class="px-6 py-4">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 font-medium text-gray-800">{{ $user->nama }}</td>
                        <td class="px-6 py-4">{{ $user->nim }}</td>
                        <td class="px-6 py-4">{{ $user->kelas->nama_kelas ?? '-' }}</td>
                        <td class="px-6 py-4 text-center">
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" 
                                  onsubmit="return confirm('Yakin hapus data ini?')"
                                  class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md shadow text-xs">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
