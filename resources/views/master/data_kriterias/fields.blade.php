<div class="form-group col-sm-12">
    {!! Form::label('id_kriteria', 'Jenis Kriteria:') !!}
    {!! Form::select('id_kriteria', $kriteria, null, ['class' => 'form-select','placeholder'=>'Pilih Kriteria']) !!}
</div>
<div class="form-group col-sm-12">
    {!! Form::label('nama_kriteria', 'Kriteria:') !!}
    {!! Form::text('nama_kriteria', null, ['class' => 'form-control','required'=>'true']) !!}
</div>
<div class="form-group col-sm-12">
    {!! Form::label('bobot', 'Bobot:') !!}
    {!! Form::text('bobot', null, ['class' => 'form-control','required'=>'true']) !!}
</div>