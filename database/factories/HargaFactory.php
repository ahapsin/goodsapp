<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Harga;

class HargaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Harga::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'tanggal' => $this->faker->date(),
            'harga_beli' => $this->faker->numberBetween(-10000, 10000),
            'harga_jual' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
