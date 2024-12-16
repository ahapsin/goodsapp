<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Barang;

class BarangFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Barang::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'satuan' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'last_update' => $this->faker->dateTime(),
        ];
    }
}
