<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lesson;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'url' => 'https://youtu.be/OwyMqApPlw4?si=TjnMVRyg-34CqYTk',
            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/OwyMqApPlw4?si=_ZMQmGEZNlXkqf-N" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
            'platform_id' => 1
        ];
    }
}
