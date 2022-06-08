@extends('layouts.master')
@section('konten')
    <div class="col-sm-12">
        <div class="clearfix"></div>
        <div class="card">
            <div class="card-header">
                <div class="header-top">
                    <h5 class="m-0">Hasil Akhir </h5>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="alternatifs-table">
                        <thead style="vertical-align : middle;text-align:center;">
                            <tr >
                                <th rowspan="2">Lokasi</th>
                                <th rowspan="2">Nama Lahan</th>
                                <th colspan="4">Nilai Kriteria</th>
                                <th colspan="4">Nilai Utility</th>
                                <th colspan="4">Normalisasi</th>
                                <th rowspan="2">Hasil Akhir</th>
                                
                            </tr>
                            <tr>
                                @foreach ($kriteria as $item)
                                    <th>{{ $item->kode }}</th>
                                @endforeach
                                @foreach ($kriteria as $item)
                                    <th>{{ $item->kode }}</th>
                                @endforeach
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
                                    @foreach ($alternatif->NilaiAlternatif as $item)
                                        <td>{{ $item->nilai_utility }}</td>
                                    @endforeach
                                    @foreach ($alternatif->NilaiAlternatif as $item)
                                        <td>{{ $item->normalisasi }}</td>
                                    @endforeach
                                    <td>{{ $alternatif->hasil_perhitungan }}</td>

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
                
            </div>
        </div>
    </div>
@endsection