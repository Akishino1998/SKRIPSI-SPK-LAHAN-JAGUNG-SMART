<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NilaiAlternatif extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'nilai_alternatif';
    protected $dates = ['deleted_at'];
  
    public function Kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id_kriteria', 'id');
    }

}
