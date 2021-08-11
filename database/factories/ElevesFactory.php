<?php

namespace Database\Factories;

use App\Models\Eleves;
use Illuminate\Database\Eloquent\Factories\Factory;

class ElevesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Eleves::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->firstName(),
            "prenom" => $this->faker->lastName(),
            "age" => $this->faker->randomNumber(2),
            "etat" =>$this->faker->boolean(),
        ];
    }
}
