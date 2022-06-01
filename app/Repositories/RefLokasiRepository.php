<?php

namespace App\Repositories;

use App\Models\RefLokasi;
use App\Repositories\BaseRepository;

/**
 * Class RefLokasiRepository
 * @package App\Repositories
 * @version May 30, 2022, 7:50 pm UTC
*/

class RefLokasiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'lokasi'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RefLokasi::class;
    }
}
