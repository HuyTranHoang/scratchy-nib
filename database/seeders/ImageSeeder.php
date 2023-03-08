<?php

namespace Database\Seeders;

use App\Models\GalleryImage;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    public function run(): void
    {
        // Hình
        GalleryImage::factory()->createMany([
            [
                'image_name' => 'uploads/me.jpg',
                'image_description' => '',
                'calligraphy_id' => '1',
            ],
            [
                'image_name' => 'uploads/datnguoivietdeyenchonguoiviet.jpg',
                'image_description' => '',
                'calligraphy_id' => '2',
            ],
            [
                'image_name' => 'uploads/camottroithuongnho.jpg',
                'image_description' => '',
                'calligraphy_id' => '3',
            ],
            [
                'image_name' => 'uploads/bietkhinaogaplai.jpg',
                'image_description' => '',
                'calligraphy_id' => '4',
            ],
            [
                'image_name' => 'uploads/antrithanhthoi.jpg',
                'image_description' => '',
                'calligraphy_id' => '5',
            ],
            [
                'image_name' => 'uploads/tonsuthanhdao.jpg',
                'image_description' => '',
                'calligraphy_id' => '6',
            ],
            [
                'image_name' => 'uploads/Ibn-al-Bawwab.jpg',
                'image_description' => '',
                'calligraphy_id' => '7',
            ],
            [
                'image_name' => 'uploads/allah.jpg',
                'image_description' => '',
                'calligraphy_id' => '8',
            ],
            [
                'image_name' => 'uploads/amanah.jpg',
                'image_description' => '',
                'calligraphy_id' => '9',
            ],
            [
                'image_name' => 'uploads/wallahu.jpg',
                'image_description' => '',
                'calligraphy_id' => '10',
            ],
            [
                'image_name' => 'uploads/basmala.jpg',
                'image_description' => '',
                'calligraphy_id' => '11',
            ],
            [
                'image_name' => 'uploads/tangdynasty.jpg',
                'image_description' => '',
                'calligraphy_id' => '12',
            ],
            [
                'image_name' => 'uploads/LantingXu.jpg',
                'image_description' => '',
                'calligraphy_id' => '13',
            ],
            [
                'image_name' => 'uploads/yunbake.jpg',
                'image_description' => '',
                'calligraphy_id' => '14',
            ],
            [
                'image_name' => 'uploads/hangul.jpg',
                'image_description' => '',
                'calligraphy_id' => '15',
            ],
            [
                'image_name' => 'uploads/arewritteninflowing.jpg',
                'image_description' => '',
                'calligraphy_id' => '16',
            ],
            [
                'image_name' => 'uploads/karate.jpg',
                'image_description' => '',
                'calligraphy_id' => '17',
            ],
            [
                'image_name' => 'uploads/eastern.jpg',
                'image_description' => '',
                'calligraphy_id' => '18',
            ],
            [
                'image_name' => 'uploads/gerardbrils.jpg',
                'image_description' => '',
                'calligraphy_id' => '19',
            ],
            [
                'image_name' => 'uploads/ialwaysstanbyyourside.jpg',
                'image_description' => '',
                'calligraphy_id' => '20',
            ],
            [
                'image_name' => 'uploads/imazing.jpg',
                'image_description' => '',
                'calligraphy_id' => '21',
            ],
        ]);
    }
}
