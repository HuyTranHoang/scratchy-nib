<?php

namespace Database\Factories;

use App\Models\Calligraphy;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class FeedbackFactory extends Factory
{
    public function definition(): array
    {
        return [
            'feedback_message' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'user_id' => User::factory(),
            'calligraphy_id' => Calligraphy::factory(),
        ];
    }
}
