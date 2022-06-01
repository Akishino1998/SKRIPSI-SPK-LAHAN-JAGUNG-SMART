<!-- Id Kriteria Field -->
<div class="col-sm-12">
    {!! Form::label('id_kriteria', 'Id Kriteria:') !!}
    <p>{{ $dataKriteria->id_kriteria }}</p>
</div>

<!-- Nama Kriteria Field -->
<div class="col-sm-12">
    {!! Form::label('nama_kriteria', 'Nama Kriteria:') !!}
    <p>{{ $dataKriteria->nama_kriteria }}</p>
</div>

<!-- Bobot Field -->
<div class="col-sm-12">
    {!! Form::label('bobot', 'Bobot:') !!}
    <p>{{ $dataKriteria->bobot }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $dataKriteria->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $dataKriteria->updated_at }}</p>
</div>

