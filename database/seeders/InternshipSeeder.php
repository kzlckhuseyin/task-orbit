<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Internship;

class InternshipSeeder extends Seeder
{
    public function run(): void
    {
        Internship::factory(10)->create();
    }
}