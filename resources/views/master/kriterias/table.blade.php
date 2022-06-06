<div class="table-responsive">
    <table class="table" id="kriterias-table">
        <thead>
            <tr>
                <th  style="text-align: center">Kode</th>
                <th  style="text-align: center">Kriteria</th>
                <th  style="text-align: center">Bobot</th>
                <th  style="text-align: center">Normalisasi</th>
                <th  style="text-align: center" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($kriterias as $kriteria)
            <tr>
                <td style="text-align: center">{{ $kriteria->kode }}</td>
                <td style="text-align: center">{{ $kriteria->kriteria }}</td>
                <td style="text-align: center">{{ $kriteria->bobot }}</td>
                <td style="text-align: center">{{ $kriteria->normalisasi }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['master.kriterias.destroy', $kriteria->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('master.kriterias.show', [$kriteria->id]) }}" class='btn btn-info btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('master.kriterias.edit', [$kriteria->id]) }}" class='btn btn-primary btn-xs'>
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
