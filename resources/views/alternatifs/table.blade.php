<div class="table-responsive">
    <table class="table" id="alternatifs-table">
        <thead style="vertical-align : middle;text-align:center;">
            <tr >
                <th rowspan="2">Lokasi</th>
                <th rowspan="2">Nama Lahan</th>
                <th colspan="4">Nilai Kriteria</th>
                <th colspan="3" rowspan="2">Action</th>
            </tr>
            <tr>
                @foreach ($kriteria as $item)
                    <th>{{ $item->kode }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody style="vertical-align : middle;text-align:center;">
            @foreach($alternatifs as $alternatif)
                <tr>
                    <td>{{ $alternatif->Lokasi->lokasi }}</td>
                    <td>{{ $alternatif->nama_lahan }}</td>
                    @foreach ($alternatif->NilaiAlternatif as $item)
                        <td>{{ $item->nilai }}</td>
                    @endforeach
                    <td width="120">
                        {!! Form::open(['route' => ['master.alternatifs.destroy', $alternatif->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('master.alternatifs.edit', [$alternatif->id]) }}" class='btn btn-primary btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @if (COUNT($alternatifs)==0)
        <div class="alert alert-warning" role="alert">
            Tidak Ada Data
        </div>
    @endif
</div>
