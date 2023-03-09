<?php

namespace Database\Factories;

use App\Models\Calligraphy;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class GalleryImageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'image_name' => $this->faker->name(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'calligraphy_id' => Calligraphy::factory(),
        ];
    }
}
