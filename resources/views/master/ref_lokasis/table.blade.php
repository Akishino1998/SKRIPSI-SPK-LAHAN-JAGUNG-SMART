<div class="table-responsive">
    <table class="table" id="refLokasis-table">
        <thead>
        <tr>
            <th>Lokasi</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($refLokasis as $refLokasi)
            <tr>
                <td>{{ $refLokasi->lokasi }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['master.refLokasis.destroy', $refLokasi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('master.refLokasis.show', [$refLokasi->id]) }}" class='btn btn-info btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('master.refLokasis.edit', [$refLokasi->id]) }}" class='btn btn-primary btn-xs'>
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
    @if (COUNT($refLokasis)==0)
        <div class="alert alert-warning" role="alert">
            Tidak Ada Data
        </div>
    @endif
</div>
