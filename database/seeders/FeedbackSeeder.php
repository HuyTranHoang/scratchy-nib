<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class FeedbackSeeder extends Seeder
{
    public function run(): void
    {


        // Feedback
        Feedback::factory()->createMany([
            [
                'feedback_message' => 'Exquisite craftsmanship.',
                'calligraphy_id' => '1',
                'user_id' => '1',
                'created_at' => Carbon::now()->subMinutes(175),
                'updated_at' => Carbon::now()->subMinutes(175),
            ],
            [
                'feedback_message' => 'Absolutely stunning.',
                'calligraphy_id' => '2',
                'user_id' => '2',
                'created_at' => Carbon::now()->subMinutes(173),
                'updated_at' => Carbon::now()->subMinutes(173),
            ],
            [
                'feedback_message' => 'Elegant and graceful.',
                'calligraphy_id' => '2',
                'user_id' => '1',
                'created_at' => Carbon::now()->subMinutes(171),
                'updated_at' => Carbon::now()->subMinutes(171),
            ],
            [
                'feedback_message' => 'An impressive display of skill.',
                'calligraphy_id' => '2',
                'user_id' => '3',
                'created_at' => Carbon::now()->subMinutes(169),
                'updated_at' => Carbon::now()->subMinutes(169),
            ],
            [
                'feedback_message' => 'Truly awe-inspiring.',
                'calligraphy_id' => '3',
                'user_id' => '3',
                'created_at' => Carbon::now()->subMinutes(171),
                'updated_at' => Carbon::now()->subMinutes(171),
            ],
            [
                'feedback_message' => 'Like a dance of words, where each stroke and curve is carefully choreographed to create a beautiful and harmonious piece of art.',
                'calligraphy_id' => '4',
                'user_id' => '4',
                'created_at' => Carbon::now()->subMinutes(169),
                'updated_at' => Carbon::now()->subMinutes(169),
            ],
            [
                'feedback_message' => 'Simply beautiful.',
                'calligraphy_id' => '5',
                'user_id' => '5',
                'created_at' => Carbon::now()->subMinutes(167),
                'updated_at' => Carbon::now()->subMinutes(167),
            ],
            [
                'feedback_message' => 'A deep appreciation for the beauty and power of language, as each stroke is imbued with meaning and intention.',
                'calligraphy_id' => '5',
                'user_id' => '5',
                'created_at' => Carbon::now()->subMinutes(165),
                'updated_at' => Carbon::now()->subMinutes(165),
            ],
            [
                'feedback_message' => 'Like witnessing magic unfold before your eyes, as the blank canvas is transformed into a work of art with each stroke of the pen.',
                'calligraphy_id' => '5',
                'user_id' => '5',
                'created_at' => Carbon::now()->subMinutes(163),
                'updated_at' => Carbon::now()->subMinutes(163),
            ],
            [
                'feedback_message' => 'A timeless quality to it, as it has been practiced and admired for centuries, and continues to inspire and captivate people to this day.',
                'calligraphy_id' => '6',
                'user_id' => '6',
                'created_at' => Carbon::now()->subMinutes(161),
                'updated_at' => Carbon::now()->subMinutes(161),
            ],
            [
                'feedback_message' => 'A meditative and calming experience, as the slow and deliberate process of lettering allows for a deep focus on the present moment.',
                'calligraphy_id' => '7',
                'user_id' => '7',
                'created_at' => Carbon::now()->subMinutes(159),
                'updated_at' => Carbon::now()->subMinutes(159),
            ],
            [
                'feedback_message' => 'The texture and weight of the pen, ink, and paper can add another layer of sensory pleasure to the experience.',
                'calligraphy_id' => '8',
                'user_id' => '9',
                'created_at' => Carbon::now()->subMinutes(157),
                'updated_at' => Carbon::now()->subMinutes(157),
            ],
            [
                'feedback_message' => 'Absolutely stunning.',
                'calligraphy_id' => '9',
                'user_id' => '8',
                'created_at' => Carbon::now()->subMinutes(155),
                'updated_at' => Carbon::now()->subMinutes(155),
            ],
            [
                'feedback_message' => 'Each stroke is a work of art.',
                'calligraphy_id' => '10',
                'user_id' => '10',
                'created_at' => Carbon::now()->subMinutes(153),
                'updated_at' => Carbon::now()->subMinutes(153),
            ],
            [
                'feedback_message' => 'Masterful precision.',
                'calligraphy_id' => '15',
                'user_id' => '2',
                'created_at' => Carbon::now()->subMinutes(151),
                'updated_at' => Carbon::now()->subMinutes(151),
            ],
            [
                'feedback_message' => 'A true feast for the eyes.',
                'calligraphy_id' => '9',
                'user_id' => '3',
                'created_at' => Carbon::now()->subMinutes(149),
                'updated_at' => Carbon::now()->subMinutes(149),
            ],
            [
                'feedback_message' => 'Truly awe-inspiring.',
                'calligraphy_id' => '11',
                'user_id' => '5',
                'created_at' => Carbon::now()->subMinutes(147),
                'updated_at' => Carbon::now()->subMinutes(147),
            ],
            [
                'feedback_message' => 'A testament to the power of language.',
                'calligraphy_id' => '12',
                'user_id' => '4',
                'created_at' => Carbon::now()->subMinutes(145),
                'updated_at' => Carbon::now()->subMinutes(145),
            ],
        ]);
    }
}
