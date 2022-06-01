<!-- Kriteria Field -->
<div class="col-sm-12">
    {!! Form::label('kriteria', 'Kriteria:') !!}
    <p>{{ $kriteria->kriteria }}</p>
</div>

<!-- Bobot Field -->
<div class="col-sm-12">
    {!! Form::label('bobot', 'Bobot:') !!}
    <p>{{ $kriteria->bobot }}</p>
</div>

<!-- Normalisasi Field -->
<div class="col-sm-12">
    {!! Form::label('normalisasi', 'Normalisasi:') !!}
    <p>{{ $kriteria->normalisasi }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $kriteria->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $kriteria->updated_at }}</p>
</div>

