@extends('layouts.master')
@section('konten')
    <div class="content px-3">
        @include('adminlte-templates::common.errors')
        <div class="card">
            {!! Form::model($kriteria, ['route' => ['master.kriterias.update', $kriteria->id], 'method' => 'patch']) !!}
            <div class="card-body">
                <div class="row">
                    <h5 class="m-0">Edit Data Kriteria </h5>
                    @include('master.kriterias.fields')
                </div>
            </div>
            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('master.kriterias.index') }}" class="btn btn-default">Kembali</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
