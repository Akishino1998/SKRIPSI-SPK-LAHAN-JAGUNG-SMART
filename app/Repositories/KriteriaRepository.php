<?php

namespace App\Repositories;

use App\Models\Kriteria;
use App\Repositories\BaseRepository;

/**
 * Class KriteriaRepository
 * @package App\Repositories
 * @version May 30, 2022, 7:50 pm UTC
*/

class KriteriaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kriteria',
        'bobot',
        'normalisasi'
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
        return Kriteria::class;
    }
}
