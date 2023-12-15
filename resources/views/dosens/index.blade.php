@extends('layouts.dosenapp')

@section('containerdosen')
    {{-- <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
    Selamat Datang, {{ $dosen->name }}! <br>
    NIP: {{ $dosen->NomorNIP }}
</div> --}}
    <div
        class="flex sm:flex-row flex-col-reverse items-center justify-evenly min-h-fit rounded-md border  p-4 mb-4 bg-gray-50 dark:bg-gray-800">
        <div>
            <p class="font-bold text-2xl text-indigo-400">Selamat Datang {{ auth()->user()->name }}!</p>
            <p class="font-bold text-xl text-indigo-400">NIP: {{ $dosen->NomorNIP }}</p>
            <br>
            <p class="text-slate-500 font-semibold">Website ini merupakan terobosan baru dari Fakultas Keguruan dan Ilmu
                Pendidikan dalam mempermudah proses bimbingan skripsi mahasiswa</p>
        </div>
        <img class="h-48 m-2 p-2" src="{{ asset('images/man-laptop.png') }}" alt="">
    </div>
@endsection
