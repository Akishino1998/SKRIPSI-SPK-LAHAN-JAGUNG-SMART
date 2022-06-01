<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class RefLokasi
 * @package App\Models
 * @version May 30, 2022, 7:50 pm UTC
 *
 * @property varchar $lokasi
 */
class RefLokasi extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'ref_lokasi';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'lokasi'
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
        'lokasi' => 'required'
    ];

    public function DataAlternatif()
    {
        return $this->hasMany(DataAlternatif::class, 'id_lokasi', 'id');
    }
    
}
