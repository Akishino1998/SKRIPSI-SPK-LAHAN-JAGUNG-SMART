@extends('layouts.master')
@section('konten')
    <div class="content px-3">
        @include('adminlte-templates::common.errors')
        <div class="card">
            {!! Form::model($alternatif, ['route' => ['master.alternatifs.update', $alternatif->id], 'method' => 'patch']) !!}
            <div class="card-body">
                <div class="row">
                    <h5 class="m-0">Edit Data Alternatif </h5>
                    @include('alternatifs.fieldsEdit')
                </div>
            </div>
            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('master.alternatifs.index') }}" class="btn btn-default">Kembali</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection


