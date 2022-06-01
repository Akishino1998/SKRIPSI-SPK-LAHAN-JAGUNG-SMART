<div class="table-responsive">
    <table class="table" id="dataKriterias-table">
        <thead>
        <tr>
            <th>Id Kriteria</th>
        <th>Nama Kriteria</th>
        <th>Bobot</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dataKriterias as $dataKriteria)
            <tr>
                <td>{{ $dataKriteria->id_kriteria }}</td>
            <td>{{ $dataKriteria->nama_kriteria }}</td>
            <td>{{ $dataKriteria->bobot }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['dataKriterias.destroy', $dataKriteria->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dataKriterias.show', [$dataKriteria->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('dataKriterias.edit', [$dataKriteria->id]) }}"
                           class='btn btn-default btn-xs'>
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
