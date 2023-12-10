<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     * $table->string('name', 100);
     * $table->string('email', 150);
     * $table->enum('sex', ['M', 'F'] );
     * $table->string('phone', 11)->nullable();
     * $table->dateTime('birth_date')->nullable();
     * $table->string('birth_city', 100)->nullable();
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
            "email" => $this->faker->email(),
            "sex" => $this->faker->randomElement(['M', 'F']),
            "phone" => $this->faker->phoneNumber(),
            "birth_date" => $this->faker->dateTimeBetween('-100 years', '-18 years'),
            "birth_city" => $this->faker->city(),
        ];
    }
}
