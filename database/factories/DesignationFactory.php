<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Designation>
 */
class DesignationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $designations = ['CEO', 'Software Developer', 'Project Manager', 'Managing Director','UI Designer'];
        return [
            'designation_name' => fake()->unique()->randomElement($designations),
            'parent_id' => null,
        ];
    }
}
