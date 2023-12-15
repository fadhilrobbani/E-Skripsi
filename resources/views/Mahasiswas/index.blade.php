@extends('layouts.mahasiswaapp')

@section('containermahasiswa')



    {{-- <div class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        Selamat Datang, {{ $mahasiswa->name }}! <br>
        NPM: {{ $mahasiswa->NPM }}
    </div> --}}
    <div
        class="flex sm:flex-row flex-col-reverse items-center justify-evenly min-h-fit rounded-md border  p-4 mb-4 bg-gray-50 dark:bg-gray-800">
        <div>
            <p class="font-bold text-2xl text-indigo-400">Selamat Datang {{ auth()->user()->name }}!</p>
            <p class="font-bold text-xl text-indigo-400">NPM: {{ $mahasiswa->NPM }}</p>
            <br>
            <p class="text-slate-500 font-semibold">Website ini merupakan terobosan baru dari Fakultas Keguruan dan Ilmu
                Pendidikan dalam mempermudah proses bimbingan skripsi mahasiswa</p>
        </div>
        <img class="h-48 m-2 p-2" src="{{ asset('images/man-laptop.png') }}" alt="">
    </div>
    <div class="flex">
        <a href="#" class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 m-4">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        </a>

        <a href="#" class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 m-4">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        </a>
        <a href="#" class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 m-4">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
        </a>
    </div>

    <!-- Other content for the Mahasiswa dashboard -->

@endsection
