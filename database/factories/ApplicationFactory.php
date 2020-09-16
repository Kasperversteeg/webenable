<?php

namespace Database\Factories;

use App\Models\Application;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ApplicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Application::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'mail' => $this->faker->email,
            'residence' => $this->faker->city,
            'function' => $this->faker->word,
            'reason' => $this->faker->randomElement(['werkzoekend', 'meer uitdaging', 'meer of minder werk', 'dichter bij huis']),
            'location' => $this->faker->randomElement(['Zwaag', 'Heerhugowaard'])
        ];
    }
}
