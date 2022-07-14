<?php

namespace App\Http\Livewire;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\RefLokasi;
use Livewire\Component;

class TableHasil extends Component
{   
    public $refLokasi, $nama_lokasi, $lokasi;
    public function mount(){
        $this->refLokasi = RefLokasi::all();
    }
    public function render()
    {
        $alternatifs = Alternatif::orderBy('hasil_perhitungan','DESC');
        if ($this->nama_lokasi != null) {
            $alternatifs = $alternatifs->where('nama_lahan','like','%'.$this->nama_lokasi.'%');
        }
        if($this->lokasi != null){
            $alternatifs = $alternatifs->where('id_lokasi',$this->lokasi);
        }
        $alternatifs = $alternatifs->paginate(9);
        $kriteria = Kriteria::all();
        return view('livewire.table-hasil',compact('alternatifs','kriteria'));
    }
}
