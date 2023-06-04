<?php

namespace Database\Factories;

use App\Models\WorkSite;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class WorksiteFactory extends Factory
{
    protected $model = WorkSite::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'desc' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
