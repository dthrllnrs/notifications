<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $links = [
            '<a href="https://example.com"><strong>example.com</strong></a>',
            '<a href="https://laravel.com"><strong>Laravel</strong></a>',
            '<a href="https://github.com"><strong>GitHub</strong></a>',
            '<a href="mailto:support@example.com"><strong>Contact Support</strong></a>',
        ];
        $sentences = $this->faker->sentences(rand(1, 3));
        // Randomly insert a link into the content
        $insertAt = rand(0, count($sentences));
        array_splice($sentences, $insertAt, 0, $this->faker->randomElement($links));
        $htmlContent = '<p>' . implode('</p><p>', $sentences) . '</p>';

        return [
            'type' => $this->faker->randomElement(['message', 'alert', 'reminder', 'update', 'warning', 'info', 'error', 'comment']),
            'author' => $this->faker->name,
            'content' => $htmlContent,
            'read_at' => $this->faker->optional()->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
