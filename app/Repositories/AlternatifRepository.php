<?php

namespace App\Repositories;

use App\Models\Alternatif;
use App\Repositories\BaseRepository;

/**
 * Class AlternatifRepository
 * @package App\Repositories
 * @version June 1, 2022, 7:53 am UTC
*/

class AlternatifRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_lokasi',
        'nama_lahan'
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
        return Alternatif::class;
    }
}
