<?php

namespace Database\Factories;

use App\Models\Lokasi;
use App\Models\Tumbuhan;
use Illuminate\Database\Eloquent\Factories\Factory;

class LokasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lokasi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        // -2.5606371525433773, 140.58247851259344
        // -2.626733778772271, 140.71686089916446

        // -2.4996368685807266, 140.72176877980013
        // -2.5338146856703267, 140.7463081845013
        return [
            'tumbuhan_id' => Tumbuhan::inRandomOrder()->first()->id,
            'lat' => $this->faker->latitude(-2.4996368685807266, -2.626733778772271),
            'lng' => $this->faker->longitude(140.58247851259344, 140.7463081845013),
            'alamat' => $this->faker->address(),
        ];
    }
}
