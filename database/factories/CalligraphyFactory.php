<?php

namespace Database\Factories;

use App\Models\CalligraphyStyle;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CalligraphyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'calligraphy_name' => $this->faker->name(),
            'calligraphy_description' => $this->faker->text(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'style_id' => CalligraphyStyle::factory(),
        ];
    }
}
