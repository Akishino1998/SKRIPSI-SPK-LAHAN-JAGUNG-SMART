<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlternatifRequest;
use App\Http\Requests\UpdateAlternatifRequest;
use App\Repositories\AlternatifRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Alternatif;
use App\Models\DataKriteria;
use App\Models\Kriteria;
use App\Models\NilaiAlternatif;
use App\Models\RefLokasi;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class AlternatifController extends AppBaseController
{
    /** @var AlternatifRepository $alternatifRepository*/
    private $alternatifRepository;

    public function __construct(AlternatifRepository $alternatifRepo)
    {
        $this->alternatifRepository = $alternatifRepo;
    }

    /**
     * Display a listing of the Alternatif.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $alternatifs = $this->alternatifRepository->all();
        $kriteria = Kriteria::all();
        
        return view('alternatifs.index',compact('kriteria'))
            ->with('alternatifs', $alternatifs);
    }

    /**
     * Show the form for creating a new Alternatif.
     *
     * @return Response
     */
    public function create()
    {
        $lokasi = RefLokasi::pluck('lokasi','id');
        $kriteria = Kriteria::all();
        return view('alternatifs.create',compact('lokasi','kriteria'));
    }

    /**
     * Store a newly created Alternatif in storage.
     *
     * @param CreateAlternatifRequest $request
     *
     * @return Response
     */
    public function store(CreateAlternatifRequest $request)
    {
        $input = $request->all();
       
        $alternatif = new Alternatif;
        $alternatif->id_lokasi = $request->id_lokasi;
        $alternatif->nama_lahan = $request->nama_lahan;
        $alternatif->id_admin = Auth::user()->id;
        $alternatif->save();
        foreach($request->kriteria as $key => $value){
            $dataKriteria = DataKriteria::all()->where('id_kriteria', $key);
            $cmin = $dataKriteria->min('bobot');
            $cmax = $dataKriteria->max('bobot');
            $cout = $value;
            $kriteria = Kriteria::find($key);
            $normalisasi = $kriteria->normalisasi;
            
            $nilaiAlternatif = new NilaiAlternatif;
            $nilaiAlternatif->nilai = $value; 
            $nilaiAlternatif->id_kriteria = $key; 
            $nilaiAlternatif->id_alternatif = $alternatif->id; 
            $nilaiAlternatif->nilai_utility = 100*($cout-$cmin)/($cmax-$cmin);
            $nilaiAlternatif->normalisasi =  $nilaiAlternatif->nilai_utility*$normalisasi;
            $nilaiAlternatif->save();

        }
        $nilaiAlternatif = NilaiAlternatif::all()->where('id_alternatif',$alternatif->id);
        $hasilAkhir = 0;
        foreach($nilaiAlternatif as $item){
            $hasilAkhir+=$item->normalisasi;
        }
        $alternatif = Alternatif::find($alternatif->id);
        $alternatif->hasil_perhitungan = $hasilAkhir;
        $alternatif->save();

        Flash::success('Alternatif berhasil disimpan!.');

        return redirect(route('master.alternatifs.index'));
    }

    /**
     * Display the specified Alternatif.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $alternatif = $this->alternatifRepository->find($id);

        if (empty($alternatif)) {
            Flash::error('Alternatif not found');

            return redirect(route('master.alternatifs.index'));
        }

        return view('alternatifs.show')->with('alternatif', $alternatif);
    }

    /**
     * Show the form for editing the specified Alternatif.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $alternatif = $this->alternatifRepository->find($id);
        $lokasi = RefLokasi::pluck('lokasi','id');
        $kriteria = $alternatif->NilaiAlternatif;
        if (empty($alternatif)) {
            Flash::error('Alternatif not found');

            return redirect(route('master.alternatifs.index'));
        }

        return view('alternatifs.edit',compact('lokasi','kriteria'))->with('alternatif', $alternatif);
    }

    /**
     * Update the specified Alternatif in storage.
     *
     * @param int $id
     * @param UpdateAlternatifRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAlternatifRequest $request)
    {
        $alternatif = Alternatif::find($id);
        $alternatif->id_lokasi = $request->id_lokasi;
        $alternatif->nama_lahan = $request->nama_lahan;
        $alternatif->id_admin = Auth::user()->id;
        $alternatif->save();
        foreach($request->kriteria as $key => $value){
            // return $key;
            $nilaiAlternatif = NilaiAlternatif::find($key);
            $dataKriteria = DataKriteria::all()->where('id_kriteria', $nilaiAlternatif->id_kriteria);
            $cmin = $dataKriteria->min('bobot');
            $cmax = $dataKriteria->max('bobot');
            $cout = $value;
            $kriteria = Kriteria::find( $nilaiAlternatif->id_kriteria);
            $normalisasi = $kriteria->normalisasi;
            
            $nilaiAlternatif->nilai = $value; 
            $nilaiAlternatif->nilai_utility = 100*($cout-$cmin)/($cmax-$cmin);
            $nilaiAlternatif->normalisasi =  $nilaiAlternatif->nilai_utility*$normalisasi;
            $nilaiAlternatif->save();
        }
        $nilaiAlternatif = NilaiAlternatif::all()->where('id_alternatif',$alternatif->id);
        $hasilAkhir = 0;
        foreach($nilaiAlternatif as $item){
            $hasilAkhir+=$item->normalisasi;
        }
        $alternatif = Alternatif::find($alternatif->id);
        $alternatif->hasil_perhitungan = $hasilAkhir;
        $alternatif->save();

        if (empty($alternatif)) {
            Flash::error('Alternatif tidak ditemukan.');

            return redirect(route('master.alternatifs.index'));
        }

        $alternatif = $this->alternatifRepository->update($request->all(), $id);

        Flash::success('Alternatif berhasil diedit!.');

        return redirect(route('master.alternatifs.index'));
    }

    /**
     * Remove the specified Alternatif from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $alternatif = $this->alternatifRepository->find($id);

        if (empty($alternatif)) {
            Flash::error('Alternatif tidak ditemukan.');

            return redirect(route('master.alternatifs.index'));
        }

        $this->alternatifRepository->delete($id);

        Flash::success('Alternatif berhasil dihapus.');

        return redirect(route('master.alternatifs.index'));
    }

    function hasil(){
        $alternatifs = $this->alternatifRepository->all();
        $kriteria = Kriteria::all();
        return view('hasil',compact('kriteria'))
            ->with('alternatifs', $alternatifs);
    }
}
