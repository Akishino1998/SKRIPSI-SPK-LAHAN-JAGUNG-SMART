@extends('layouts.master')
@section('konten')
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h5 class="m-0">Data Kriteria </h5>
                    @include('master.kriterias.show_fields')
                </div>
            </div>
            <a class="btn btn-light float-right " style="margin: 0px 20px 20px 20px" href="{{ route('master.kriterias.index') }}">
                Kembali
            </a>
        </div>
    </div>
@endsection
