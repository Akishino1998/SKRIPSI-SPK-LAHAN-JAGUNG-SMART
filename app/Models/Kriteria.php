<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Kriteria
 * @package App\Models
 * @version May 30, 2022, 7:50 pm UTC
 *
 * @property varchar $kriteria
 * @property varchar $bobot
 * @property varchar $normalisasi
 */
class Kriteria extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'kriteria';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'kriteria',
        'bobot',
        'normalisasi'
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
        'kriteria' => 'required',
        'bobot' => 'required',
        'normalisasi' => 'required'
    ];
 
    public function DataKriteria()
    {
        return $this->hasMany(DataKriteria::class, 'id_kriteria', 'id');
    }
    
}
