<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Calligraphy;
use App\Models\CalligraphyCategory;
use App\Models\CalligraphyStyle;
use App\Models\Feedback;
use App\Models\GalleryImage;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
             'password' => Hash::make('test')
         ]);

        CalligraphyCategory::factory()->createMany([
            [
                'category_id' => 1,
                'category_name' => 'Traditional Calligraphy',
                'category_description' => ''
            ],
            [
                'category_id' => 2,
                'category_name' => 'Contemporary Calligraphy',
                'category_description' => ''
            ],
            [
                'category_id' => 3,
                'category_name' => 'Hand-lettering & Design',
                'category_description' => ''
            ],
            [
                'category_id' => 4,
                'category_name' => 'Modern Calligraphy',
                'category_description' => ''
            ]
        ]);

        CalligraphyStyle::factory()->createMany([
            [
                'style_name' => 'Vietnam Caligraphy',
                'style_description' => 'Known as Thư pháp',
                'category_id' => 1
            ],
            [
                'style_name' => 'Arabic Calligraphy',
                'style_description' => 'Known as khatt',
                'category_id' => 1
            ],
            [
                'style_name' => 'Chinese Calligraphy',
                'style_description' => 'Known as Shūfǎ ',
                'category_id' => 1
            ]
        ]);

        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => '新婦地黃湯帖',
                'calligraphy_description' => 'currently in the Taito Ward Calligraphy Museum',
                'style_id' => '3'
            ],
            [
                'calligraphy_name' => 'Lộc',
                'calligraphy_description' => 'Vietnamese calligraphy',
                'style_id' => '1'
            ]
        ]);

        Feedback::factory()->createMany([
            [
                'feedback_message' => 'Nhìn hông hiểu gì hết',
                'calligraphy_id' => '1',
                'user_id' => '1'
            ],
            [
                'feedback_message' => 'Đẹp quá',
                'calligraphy_id' => '2',
                'user_id' => '1'
            ]
        ]);

        GalleryImage::factory()->createMany([
            [
                'image_name' => 'Hinh1',
                'image_description' => '',
                'calligraphy_id' => '1'
            ],
            [
                'image_name' => 'Hinh2',
                'image_description' => '',
                'calligraphy_id' => '2'
            ]
        ]);

    }
}
