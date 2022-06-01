
@extends('layouts.master')
@section('konten')
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h5 class="m-0">Data Lokasi </h5>
                    @include('master.ref_lokasis.show_fields')
                </div>
            </div>
            <a class="btn btn-light float-right " style="margin: 0px 20px 20px 20px" href="{{ route('master.refLokasis.index') }}">
                Kembali
            </a>
        </div>
    </div>
@endsection
