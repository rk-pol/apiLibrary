<?php

namespace Database\Factories;

use App\Models\Author;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       return [
           'name' => fake()->name,
           'description' => fake()->text(),
           'year_of_birth' => fake()->numberBetween(1900, 1992),
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
       ];
    }
}
