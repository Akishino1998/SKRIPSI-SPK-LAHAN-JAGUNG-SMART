
@extends('layouts.master')
@section('konten')
    <div class="content px-3 col-md-6">
        @include('adminlte-templates::common.errors')
        <div class="card">
            {!! Form::open(['route' => 'master.alternatifs.store']) !!}
            <div class="card-body">
                <div class="row">
                    <h5 class="m-0">Tambah Data Alternatif </h5>
                    @include('alternatifs.fields')
                </div>
            </div>
            <div class="card-footer">
                {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('master.alternatifs.index') }}" class="btn btn-light">Kembali</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
