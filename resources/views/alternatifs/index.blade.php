@extends('layouts.master')
@section('konten')
    <div class="col-sm-8">
        <div class="clearfix"></div>
        <div class="card">
            <div class="card-header">
                <div class="header-top">
                    <h5 class="m-0">Data Alternatif 
                        <a class="btn btn-primary" style="float: right" href="{{ route('master.alternatifs.create') }}">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah Baru
                        </a>       
                    </h5>
                </div>
            </div>
            <div class="card-body">
                @include('flash::message')
                @include('alternatifs.table')
            </div>
        </div>
    </div>
@endsection