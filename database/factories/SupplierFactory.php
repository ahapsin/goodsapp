<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Supplier;

class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'alamat' => $this->faker->regexify('[A-Za-z0-9]{400}'),
            'no_hp' => $this->faker->regexify('[A-Za-z0-9]{400}'),
        ];
    }
}
