


@extends('layouts.master')
@section('konten')
    <div class="content px-3 col-md-6">
        @include('adminlte-templates::common.errors')
        <div class="card">
            {!! Form::open(['route' => 'master.kriterias.store']) !!}
            <div class="card-body">
                <div class="row">
                    <h5 class="m-0">Tambah Data Kriteria </h5>
                    @include('master.kriterias.fields')
                </div>
            </div>
            <div class="card-footer">
                {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('master.kriterias.index') }}" class="btn btn-light">Kembali</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
