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
            'name' => 'Trần Hoàng Huy',
            'email' => 'HTH@example.com',
            'password' => Hash::make('test'),
        ]);
        User::factory()->create([
            'name' => 'Huỳnh Chí Bảo',
            'email' => 'BHC@example.com',
            'password' => Hash::make('test'),
        ]);
        User::factory()->create([
            'name' => 'Trần Phát Đạt',
            'email' => 'DTP@example.com',
            'password' => Hash::make('test'),
        ]);
        User::factory()->create([
            'name' => 'Lệ Thị Bưởi',
            'email' => 'BLT@example.com',
            'password' => Hash::make('test'),
        ]);
        User::factory()->create([
            'name' => 'Lê Văn Tèo',
            'email' => 'TLV@example.com',
            'password' => Hash::make('test'),
        ]);
        User::factory()->create([
            'name' => 'Võ Công Tình',
            'email' => 'TVCH@example.com',
            'password' => Hash::make('test'),
        ]);
        User::factory()->create([
            'name' => 'Lê Thị Bé',
            'email' => 'LTB@example.com',
            'password' => Hash::make('test'),
        ]);
        User::factory()->create([
            'name' => 'Lệ Hồng Cánh Sen',
            'email' => 'SLHC@example.com',
            'password' => Hash::make('test'),
        ]);
        User::factory()->create([
            'name' => 'Bành Thị Lá É',
            'email' => 'EBTL@example.com',
            'password' => Hash::make('test'),
        ]);
        User::factory()->create([
            'name' => 'Lê Công Vinh',
            'email' => 'VLC@example.com',
            'password' => Hash::make('test'),
        ]);

        CalligraphyCategory::factory()->createMany([
            [
                'category_id' => 1,
                'category_name' => 'Traditional Calligraphy',
                'category_description' => '',
            ],
            [
                'category_id' => 2,
                'category_name' => 'Contemporary Calligraphy',
                'category_description' => '',
            ],
            [
                'category_id' => 3,
                'category_name' => 'Hand-lettering & Design',
                'category_description' => '',
            ],
            [
                'category_id' => 4,
                'category_name' => 'Modern Calligraphy',
                'category_description' => '',
            ],
        ]);

        CalligraphyStyle::factory()->createMany([
            [
                'style_name' => 'Vietnam Caligraphy',
                'style_description' => 'Known as Thư pháp',
                'category_id' => 1,
            ],
            [
                'style_name' => 'Arabic Calligraphy',
                'style_description' => 'Known as khatt',
                'category_id' => 4,
            ],
            [
                'style_name' => 'Chinese Calligraphy',
                'style_description' => 'Known as Shūfǎ ',
                'category_id' => 1,
            ],
            [
                'style_name' => 'Japan Calligraphy',
                'style_description' => 'Known as Shodō ',
                'category_id' => 2,
            ],
            [
                'style_name' => 'Korea Calligraphy',
                'style_description' => 'Known as dalpil ',
                'category_id' => 3,
            ],
        ]);

        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => '新婦地黃湯帖',
                'calligraphy_description' => 'currently in the Taito Ward Calligraphy Museum',
                'style_id' => '3',
            ],
            [
                'calligraphy_name' => 'Lộc',
                'calligraphy_description' => 'Vietnamese calligraphy',
                'style_id' => '1',
            ],
            [
                'calligraphy_name' => 'لوك',
                'calligraphy_description' => 'Vietnamese calligraphy',
                'style_id' => '2',
            ],
            [
                'calligraphy_name' => 'ロク',
                'calligraphy_description' => 'Japan calligraphy',
                'style_id' => '4',
            ],
            [
                'calligraphy_name' => '위치',
                'calligraphy_description' => 'Korea calligraphy',
                'style_id' => '5',
            ],

        ]);

        Feedback::factory()->createMany([
            [
                'feedback_message' => 'Nhìn hông hiểu gì hết',
                'calligraphy_id' => '1',
                'user_id' => '1',
            ],
            [
                'feedback_message' => 'Đẹp quá',
                'calligraphy_id' => '2',
                'user_id' => '2',
            ],
            [
                'feedback_message' => 'Ấn Đụuuu',
                'calligraphy_id' => '3',
                'user_id' => '3',
            ],
            [
                'feedback_message' => 'Kimochiii',
                'calligraphy_id' => '4',
                'user_id' => '4',
            ],
            [
                'feedback_message' => 'Chim Bé Mắt Hí',
                'calligraphy_id' => '5',
                'user_id' => '5',
            ],
        ]);

        GalleryImage::factory()->createMany([
            [
                'image_name' => 'Hinh1',
                'image_description' => '',
                'calligraphy_id' => '1',
            ],
            [
                'image_name' => 'Hinh2',
                'image_description' => '',
                'calligraphy_id' => '2',
            ],
            [
                'image_name' => 'Hinh3',
                'image_description' => '',
                'calligraphy_id' => '3',
            ],
            [
                'image_name' => 'Hinh4',
                'image_description' => '',
                'calligraphy_id' => '4',
            ],
            [
                'image_name' => 'Hinh5',
                'image_description' => '',
                'calligraphy_id' => '5',
            ],
        ]);
    }
}
