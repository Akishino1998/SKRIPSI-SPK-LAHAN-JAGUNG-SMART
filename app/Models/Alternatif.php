<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Alternatif
 * @package App\Models
 * @version June 1, 2022, 7:53 am UTC
 *
 * @property int $id_lokasi
 * @property varchar $nama_lahan
 */
class Alternatif extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'alternatif';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_admin',
        'id_lokasi',
        'nama_lahan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_lokasi' => 'required',
        'nama_lahan' => 'required'
    ];
 
    public function Lokasi()
    {
        return $this->belongsTo(RefLokasi::class, 'id_lokasi', 'id');
    }
  
    public function NilaiAlternatif()
    {
        return $this->hasMany(NilaiAlternatif::class, 'id_alternatif', 'id');
    }
}
