<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    public function run(): void
    {


        // Feedback
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
                'feedback_message' => 'Phong cách trừu trưng',
                'calligraphy_id' => '3',
                'user_id' => '3',
            ],
            [
                'feedback_message' => 'Kimochiii',
                'calligraphy_id' => '4',
                'user_id' => '4',
            ],
            [
                'feedback_message' => 'Nhìn quen thế',
                'calligraphy_id' => '5',
                'user_id' => '5',
            ],
            [
                'feedback_message' => 'Đẹpquasas zậy ố mai gọt',
                'calligraphy_id' => '5',
                'user_id' => '5',
            ],
            [
                'feedback_message' => 'nai à bíu ti full',
                'calligraphy_id' => '5',
                'user_id' => '5',
            ],
            [
                'feedback_message' => 'quaoo a du ang seng',
                'calligraphy_id' => '6',
                'user_id' => '6',
            ],
            [
                'feedback_message' => 'phan anh cua toi',
                'calligraphy_id' => '7',
                'user_id' => '7',
            ],
            [
                'feedback_message' => 'dark dark burh burh lmao lmao',
                'calligraphy_id' => '8',
                'user_id' => '9',
            ],
            [
                'feedback_message' => 'Holy shettt',
                'calligraphy_id' => '9',
                'user_id' => '8',
            ],
            [
                'feedback_message' => 'Đẹp quá trời luôn thật không thể tin được',
                'calligraphy_id' => '10',
                'user_id' => '10',
            ],
            [
                'feedback_message' => 'tôi yêu tấm ảnh này quá tuyệt vời',
                'calligraphy_id' => '15',
                'user_id' => '2',
            ],
            [
                'feedback_message' => 'tôi yêu ảnh này',
                'calligraphy_id' => '9',
                'user_id' => '3',
            ],
            [
                'feedback_message' => 'tấm ảnh làm tôi xúc động',
                'calligraphy_id' => '11',
                'user_id' => '5',
            ],
            [
                'feedback_message' => 'thật ý nghĩa ',
                'calligraphy_id' => '12',
                'user_id' => '4',
            ],
        ]);
    }
}
