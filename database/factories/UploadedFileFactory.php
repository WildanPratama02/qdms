<?php

namespace Database\Factories;

use App\Models\UploadedFile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UploadedFile>
 */
class UploadedFileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = UploadedFile::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fileName = fake()->words(3, true).'.pdf';
        $fileType = fake()->randomElement(['rca', 'bsom']);

        return [
            'file_name' => $fileName,
            'file_type' => $fileType,
            'file_path' => "uploads/{$fileType}/".fake()->uuid().'_'.$fileName,
            'category' => fake()->randomElement(['quality', 'production', 'maintenance', 'safety']),
            'document_date' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }

    /**
     * Indicate that the file is an RCA file.
     */
    public function rca(): static
    {
        return $this->state(fn (array $attributes) => [
            'file_type' => 'rca',
            'file_path' => 'uploads/rca/'.fake()->uuid().'_'.fake()->words(3, true).'.pdf',
        ]);
    }

    /**
     * Indicate that the file is a BSOM file.
     */
    public function bsom(): static
    {
        return $this->state(fn (array $attributes) => [
            'file_type' => 'bsom',
            'file_path' => 'uploads/bsom/'.fake()->uuid().'_'.fake()->words(3, true).'.pdf',
        ]);
    }
}
