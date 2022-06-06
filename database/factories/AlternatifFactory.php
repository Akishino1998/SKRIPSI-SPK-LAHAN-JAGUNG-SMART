<?php

namespace Database\Factories;

use App\Models\Alternatif;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlternatifFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alternatif::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_lokasi' => $this->faker->word,
        'nama_lahan' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
