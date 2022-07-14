<div>
    <style>
        td{
            text-align: center;
        }
    </style>
    <div class="row mt-lg-4 mt-2">
        <div class="col-lg-14">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-control-label" for="basic-url">Lokasi</label>
                        <div class="input-group">
                            <select class="form-control" id="exampleFormControlSelect1" wire:model="lokasi">
                                <option value="">Pilih Lokasi</option>
                                @foreach ($refLokasi as $item)
                                    <option value="{{ $item->id }}">{{ $item->lokasi }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-control-label" for="basic-url">Nama Lokasi</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" wire:model="nama_lokasi">
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12" wire:loading.remove>
            <table class="table">
                <thead>
                    <tr>
                        <th rowspan="2" style="vertical-align: middle;text-align:center">No</th>
                        <th rowspan="2" style="vertical-align: middle;text-align:center">Lokasi</th>
                        <th colspan="4" class="text-center">Nilai Kriteria</th>
                        <th colspan="4" class="text-center">Nilai Utility</th>
                        <th colspan="4" class="text-center">Nilai Normalisasi</th>
                        <th rowspan="2" style="vertical-align: middle;text-align:center">Perhitungan Akhir</th>
                        <th rowspan="2" style="vertical-align: middle;text-align:center">Cetak</th>
                        
                    </tr>
                    <tr>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alternatifs as $alternatif)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $alternatif->Lokasi->lokasi }} - {{ $alternatif->nama_lahan }} </td>
                            @foreach ($kriteria as $item)
                                <td>{{ $item->kode }}</td>
                            @endforeach
                            @foreach ($alternatif->NilaiAlternatif as $item)
                                <td>{{ $item->nilai }}</td>
                            @endforeach
                            @foreach ($alternatif->NilaiAlternatif as $item)
                                <td>{{ $item->nilai_utility }}</td>
                            @endforeach
                            <td>{{ $alternatif->hasil_perhitungan }}</td>
                            <td>
                                <a target="_blank" href="{{ route('master.print',[$alternatif->id]) }}" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
                
        <div class="col-md-12">
            @if (COUNT($alternatifs)==0)
                <div wire:loading.remove>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-icon"> <i class="fas fa-exclamation-triangle"></i> </span>
                        <span class="alert-text"><strong>Tidak Ditemukan!</strong></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @else
                <div wire:loading.remove>
                    <div class="d-flex justify-content-center mt-5">
                        {{ $alternatifs->links() }}
                    </div>
                </div>
            @endif
            <div class="alert alert-secondary alert-dismissible fade show" role="alert"  wire:loading.flex>
                <span class="alert-icon"><i class="fas fa-spinner   fa-spin "></i> </span>
                <span class="alert-text"><strong> Mencari!</strong></span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
