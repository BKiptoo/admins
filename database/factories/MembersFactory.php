<?php

namespace Database\Factories;

use App\Models\Members;
use Illuminate\Database\Eloquent\Factories\Factory;

class MembersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Members::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'role' => $this->faker->randomElement(['Admin', 'User']),
            'joined_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
