<!-- Id Kriteria Field -->
<div class="col-sm-12">
    {!! Form::label('id_kriteria', 'Jenis Kriteria:') !!}
    <p>{{ $dataKriteria->Kriteria->kriteria }}</p>
</div>

<!-- Nama Kriteria Field -->
<div class="col-sm-12">
    {!! Form::label('nama_kriteria', 'Kriteria:') !!}
    <p>{{ $dataKriteria->nama_kriteria }}</p>
</div>

<!-- Bobot Field -->
<div class="col-sm-12">
    {!! Form::label('bobot', 'Bobot:') !!}
    <p>{{ $dataKriteria->bobot }}</p>
</div>
