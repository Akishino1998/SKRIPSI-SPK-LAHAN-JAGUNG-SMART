@extends('layouts.master')
@section('konten')

<div class="row mt-4">
    <div class="col-lg-12">
        <div class="card h-100 p-3">
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100"
                style="background-image: url('../assets/img/ivancik.jpg');">
                <span class="mask bg-gradient-dark"></span>
                <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                    <h5 class="text-white font-weight-bolder mb-4 pt-2 text-capitalize">Selamat Datang Di Aplikasi SPK PEMILIHAN LAHAN PRODUKTIF PADA TANAMAN JAGUNG</h5>
                    <p class="text-white">Silahkan masukkan data alternatif untuk mengetahui penilaian dari lahan yang akan digunakan untuk tanaman jagung.</p>
                    <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{ route('master.alternatifs.create') }}">
                        Klik Di sini!
                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
