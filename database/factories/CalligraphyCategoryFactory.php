<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CalligraphyCategoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => $this->faker->randomNumber(),
            'category_name' => $this->faker->name(),
            'category_description' => $this->faker->text(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
