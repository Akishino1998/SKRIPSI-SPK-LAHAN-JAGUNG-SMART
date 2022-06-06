

@extends('layouts.master')
@section('konten')
    <div class="content px-3 col-md-6">
        @include('adminlte-templates::common.errors')
        <div class="card">
            {!! Form::open(['route' => 'master.dataKriterias.store']) !!}
            <div class="card-body">
                <div class="row">
                    <h5 class="m-0">Tambah Data Detail Kriteria </h5>
                    @include('master.data_kriterias.fields')
                </div>
            </div>
            <div class="card-footer">
                {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('master.dataKriterias.index') }}" class="btn btn-light">Kembali</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
