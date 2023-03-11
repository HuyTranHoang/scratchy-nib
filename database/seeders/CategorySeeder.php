<?php

namespace Database\Seeders;

use App\Models\CalligraphyCategory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        CalligraphyCategory::factory()->createMany([
            [
                'category_id' => 1,
                'category_name' => 'Traditional Calligraphy',
                'category_image' => 'uploads/cateImages/c404d7ec7a9bf48f56b0a7ba7d6c42c0.jpg',
                'category_description' => 'Traditional calligraphy is the art of beautiful writing by hand,
                often using special pens or brushes and ink. It is an ancient art form that has been practiced for
                thousands of years in various cultures around the world, including China, Japan, Korea,
                and many Islamic countries.',
            ],
            [
                'category_id' => 2,
                'category_name' => 'Contemporary Calligraphy',
                'category_image' => 'uploads/cateImages/4dec201059f0f7ae894a189453a9f2e9.jpg',
                'category_description' => 'Contemporary calligraphy is a modern interpretation of traditional calligraphy
                that incorporates new techniques, materials, and styles. While traditional calligraphy emphasizes
                adherence to established rules and forms, contemporary calligraphy is more experimental and often
                allows for more creative expression.',
            ],
            [
                'category_id' => 3,
                'category_name' => 'Hand-lettering & Design',
                'category_image' => 'uploads/cateImages/02ba2ff95c6a235a5ed1547fcf9562e6.jpg',
                'category_description' => 'Hand-lettering and design is a type of visual art that combines hand-drawn
                lettering and design elements to create a unique and cohesive visual message.
                Unlike traditional calligraphy, which is focused on creating stylized writing using a particular
                script, hand-lettering is all about creating letterforms that are uniquely designed for a specific purpose or message.',
            ],
            [
                'category_id' => 4,
                'category_name' => 'Modern Calligraphy',
                'category_image' => 'uploads/cateImages/3157660e3c37a3783f33c56381c5b70c.jpg',
                'category_description' => 'Modern calligraphy is a contemporary form of calligraphy that combines
                traditional calligraphy techniques with modern design elements. It has become increasingly popular
                in recent years, especially with the rise of social media platforms like Instagram, where modern
                calligraphers showcase their work.',
            ],
        ]);
    }
}
