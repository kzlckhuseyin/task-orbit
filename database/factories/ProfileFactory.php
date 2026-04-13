<?php

namespace Database\Factories;

use App\Models\Profile;
use App\Models\User;
use App\Models\Company;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    protected $model = Profile::class;

    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'company_id' => Company::inRandomOrder()->first()?->id ?? Company::factory(),
            'role_id' => Role::inRandomOrder()->first()?->id ?? Role::factory(),
        ];
    }
}
