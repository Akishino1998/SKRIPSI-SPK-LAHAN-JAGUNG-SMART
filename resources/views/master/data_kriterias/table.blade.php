<div class="table-responsive">
    <table class="table" id="dataKriterias-table">
        <thead>
            <tr  style="text-align: center">
                <th>Jenis Kriteria</th>
                <th>Kriteria</th>
                <th>Bobot</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dataKriterias as $dataKriteria)
            <tr>
                <td>{{ $dataKriteria->Kriteria->kriteria }}</td>
                <td style="text-align: center">{{ $dataKriteria->nama_kriteria }}</td>
                <td style="text-align: center">{{ $dataKriteria->bobot }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['master.dataKriterias.destroy', $dataKriteria->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('master.dataKriterias.show', [$dataKriteria->id]) }}" class='btn btn-info btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('master.dataKriterias.edit', [$dataKriteria->id]) }}" class='btn btn-primary btn-xs'>
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
</div>
