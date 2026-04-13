<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class InternshipFactory extends Factory
{
    public function definition(): array
    {
        return [
            'company_id' => Company::inRandomOrder()->first()?->id ?? Company::factory(),
            'title' => fake()->jobTitle(),
            'status' => fake()->boolean(),
            'description' => fake()->paragraph(),
        ];
    }
}