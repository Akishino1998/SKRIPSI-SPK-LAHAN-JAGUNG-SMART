@extends('layouts.master')
@section('konten')
    <div class="content px-3">
        @include('adminlte-templates::common.errors')
        <div class="card">
            {!! Form::model($dataKriteria, ['route' => ['master.dataKriterias.update', $dataKriteria->id], 'method' => 'patch']) !!}
            <div class="card-body">
                <div class="row">
                    <h5 class="m-0">Edit Data Kriteria </h5>
                    @include('master.data_kriterias.fields')
                </div>
            </div>
            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('master.dataKriterias.index') }}" class="btn btn-default">Kembali</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

