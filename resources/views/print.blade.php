
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css') }}" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/css/bootstrap.min.css">
<style>
    h1,h2,h3,h4,h5,h6,a,input,div,td,tr,th{
        font-family: 'PT Sans', sans-serif !important;
    }
    .btn-info{
        color: white !important;
    }
</style>
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-3">
                    <div class="">
                        <div class="ms-3 my-auto">
                            <h4>
                                {{ $alternatif->Lokasi->lokasi }} - {{ $alternatif->nama_lahan }} 
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
    </div>
</div>
<script>
    window.print();
</script>