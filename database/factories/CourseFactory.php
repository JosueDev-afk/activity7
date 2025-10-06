<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Kit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'course_cover' => fake()->imageUrl(640, 480, 'technology'),
            'content' => fake()->paragraph(15),
            // Assign a random, existing kit ID to each course
            'kit_id' => Kit::inRandomOrder()->first()->id,
        ];
    }
}