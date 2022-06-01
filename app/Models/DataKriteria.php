<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DataKriteria
 * @package App\Models
 * @version May 30, 2022, 7:51 pm UTC
 *
 * @property varchar $id_kriteria
 * @property varchar $nama_kriteria
 * @property varchar $bobot
 */
class DataKriteria extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'data_kriteria';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_kriteria',
        'nama_kriteria',
        'bobot'
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
        'id_kriteria' => 'required',
        'nama_kriteria' => 'required',
        'bobot' => 'required'
    ];

   
    public function Kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id_kriteria', 'id');
    }
}
