<div>
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
            <div class="row">
                @foreach ($alternatifs as $alternatif)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body p-3">
                                <div class="">
                                    <div class="ms-3 my-auto">
                                        <h4>
                                            {{ $alternatif->Lokasi->lokasi }} - {{ $alternatif->nama_lahan }} 
                                            <span style="float: right"><a target="_blank" href="{{ route('master.print',[$alternatif->id]) }}" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i></a></span>
                                        </h4>
                                    </div>
                                </div>
                                <hr class="horizontal dark">
                                <table class="table" id="alternatifs-table">
                                    <thead style="vertical-align : middle;text-align:center;">
                                        <tr >
                                            <th colspan="4">Nilai Kriteria</th>
                                        </tr>
                                        <tr>
                                            @foreach ($kriteria as $item)
                                                <th>{{ $item->kode }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody style="vertical-align : middle;text-align:center;">
                                        <tr>
                                            @foreach ($alternatif->NilaiAlternatif as $item)
                                                <td>{{ $item->nilai }}</td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                                <hr class="horizontal dark">
                                <table class="table" id="alternatifs-table">
                                    <thead style="vertical-align : middle;text-align:center;">
                                        <tr >
                                            <th colspan="4">Nilai Utility</th>
                                            
                                        </tr>
                                        <tr>
                                            @foreach ($kriteria as $item)
                                                <th>{{ $item->kode }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody style="vertical-align : middle;text-align:center;">
                                        <tr>
                                            @foreach ($alternatif->NilaiAlternatif as $item)
                                                <td>{{ $item->nilai_utility }}</td>
                                            @endforeach

                                        </tr>
                                    </tbody>
                                </table>
                                <hr class="horizontal dark">
                                <table class="table" id="alternatifs-table">
                                    <thead style="vertical-align : middle;text-align:center;">
                                        <tr >
                                            <th colspan="4">Nilai Normalisasi</th>
                                            
                                        </tr>
                                        <tr>
                                            @foreach ($kriteria as $item)
                                                <th>{{ $item->kode }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody style="vertical-align : middle;text-align:center;">
                                        <tr>
                                            @foreach ($alternatif->NilaiAlternatif as $item)
                                                <td>{{ $item->normalisasi }}</td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                                <hr class="horizontal dark">
                                <table class="table" id="alternatifs-table">
                                    <thead style="vertical-align : middle;text-align:center;">
                                        <tr >
                                            <th colspan="4">Perhitungan Akhir</th>
                                        </tr>
                                    </thead>
                                    <tbody style="vertical-align : middle;text-align:center;">
                                        <tr>
                                            <td>{{ $alternatif->hasil_perhitungan }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
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
