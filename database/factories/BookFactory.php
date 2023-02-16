<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Language;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'author_id' => Author::all()->random()->id,
            'genre_id' => Genre::all()->random()->id,
            'lang_id' => Language::all()->random()->id,
            'attributes' => json_encode([
                'title' => fake()->sentence(),
                'description' => fake()->text(),
                'year' => fake()->numberBetween(1930, 1980)
            ]),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
