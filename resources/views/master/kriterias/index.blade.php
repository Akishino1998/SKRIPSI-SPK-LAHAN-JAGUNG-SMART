@extends('layouts.master')
@section('konten')
    <div class="col-sm-12">
        <div class="clearfix"></div>
        <div class="card">
            <div class="card-header">
                <div class="header-top">
                    <h5 class="m-0">Data Kriteria 
                        <a class="btn btn-primary" style="float: right" href="{{ route('master.kriterias.create') }}">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah Baru
                        </a>       
                    </h5>
                </div>
            </div>
            <div class="card-body">
                @include('flash::message')
                @include('master.kriterias.table')
            </div>
        </div>
    </div>
@endsection