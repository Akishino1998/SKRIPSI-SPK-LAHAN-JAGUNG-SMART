<div class="form-group col-sm-12">
    {!! Form::label('id_lokasi', 'Lokasi:') !!}
    {!! Form::select('id_lokasi', $lokasi, null, ['class' => 'form-select','placeholder'=>'Pilih Lokasi']) !!}
</div>
<div class="form-group col-sm-12">
    {!! Form::label('nama_lahan', 'Nama Lahan:') !!}
    {!! Form::text('nama_lahan', null, ['class' => 'form-control','required'=>'true']) !!}
</div>

@foreach ($kriteria as $item)
    <div class="form-group col-sm-12">
        <label for="kriteria">{{ $item->Kriteria->kriteria }}:</label>
        <input class="form-control" required="true" name="kriteria[{{ $item->id }}]" type="text" value="{{ $item->nilai }}">
    </div>
@endforeach