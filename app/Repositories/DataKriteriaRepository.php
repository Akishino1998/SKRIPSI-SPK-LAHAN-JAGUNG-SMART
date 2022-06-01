<?php

namespace App\Repositories;

use App\Models\DataKriteria;
use App\Repositories\BaseRepository;

/**
 * Class DataKriteriaRepository
 * @package App\Repositories
 * @version May 30, 2022, 7:51 pm UTC
*/

class DataKriteriaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_kriteria',
        'nama_kriteria',
        'bobot'
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
        return DataKriteria::class;
    }
}
