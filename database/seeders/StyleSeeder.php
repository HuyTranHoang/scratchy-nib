<?php

namespace Database\Seeders;

use App\Models\CalligraphyStyle;
use Illuminate\Database\Seeder;

class StyleSeeder extends Seeder
{
    public function run(): void
    {
        // Style of Traditional Calligraphy [ 1 - 7 ]
        CalligraphyStyle::factory()->createMany([
            [
                'style_id' => 1,
                'style_name' => 'Vietnam Caligraphy',
                'style_description' => 'Known as "Thư Pháp Việt Nam" in Vietnamese,
                is an important part of Vietnamese culture and has a long history dating back to ancient times.
                Vietnamese calligraphy uses the Roman alphabet and is typically written in black ink on white paper or silk.',
                'category_id' => 1,
            ],
            [
                'style_id' => 2,
                'style_name' => 'Arabic Calligraphy',
                'style_description' => 'Known as "khatt", is characterized by its flowing, curved lines and intricate
                patterns. It is considered a sacred art form in Islamic culture and is often used to write religious texts.',
                'category_id' => 1,
            ],
            [
                'style_id' => 3,
                'style_name' => 'Chinese Calligraphy',
                'style_description' => 'Known as "Shūfǎ" in Chinese, Chinese calligraphy is one of the oldest and most
                revered forms of calligraphy. It is characterized by its emphasis on brush strokes and ink flow,
                with the aim of creating a harmonious balance between the written characters and the surrounding space.',
                'category_id' => 1,
            ],
            [
                'style_id' => 4,
                'style_name' => 'Korea Calligraphy',
                'style_description' => 'Known as "Seoye", Korean calligraphy is characterized by its use of simplified
                and graceful lines. It often emphasizes the beauty of individual strokes rather than the overall composition.',
                'category_id' => 1,
            ],
            [
                'style_id' => 5,
                'style_name' => 'Japan Calligraphy',
                'style_description' => 'Known as "Shodō" in Japanese, Japanese calligraphy is influenced by
                Chinese calligraphy but has its own distinct style. It emphasizes the beauty of simple lines and the
                balance between black ink and white space. Japanese calligraphy is often used in Zen meditation and martial arts.',
                'category_id' => 1,
            ],
            [
                'style_id' => 6,
                'style_name' => 'Western Calligraphy',
                'style_description' => 'Western calligraphy has a long history dating back to the Roman Empire.
                It includes various styles such as Gothic, Italic, and Copperplate. Western calligraphy is known
                for its use of a pointed pen or quill to create thick and thin lines, as well as its emphasis on
                legibility and readability.',
                'category_id' => 1,
            ],
            [
                'style_id' => 7,
                'style_name' => 'Greek Calligraphy',
                'style_description' => 'Greek calligraphy refers to the art of beautiful writing in the Greek language,
                using a variety of scripts and styles. The Greek alphabet has a long history and has been used for
                writing since the 8th century BC.',
                'category_id' => 1,
            ],
        ]);

        // Style of Contemporary Calligraphy [ 8 - 10 ]
        CalligraphyStyle::factory()->createMany([
            [
                'style_id' => 8,
                'style_name' => 'Brush calligraphy',
                'style_description' => 'Brush calligraphy is a popular style of contemporary calligraphy that uses a
                brush instead of a traditional pen or nib to create letters and strokes.
                This style is often characterized by its flowing, loose lines and expressive brushwork.',
                'category_id' => 2,
            ],
            [
                'style_id' => 9,
                'style_name' => 'Modern script',
                'style_description' => 'Modern script calligraphy is a contemporary take on traditional script
                calligraphy that emphasizes flowing, organic lines and unique letterforms.
                This style often incorporates decorative flourishes and ligatures for added flair.',
                'category_id' => 2,
            ],
            [
                'style_id' => 10,
                'style_name' => 'Gothic calligraphy',
                'style_description' => 'Gothic calligraphy is a style of calligraphy that evolved from medieval
                illuminated manuscripts. In contemporary gothic calligraphy, traditional gothic letterforms are
                often combined with modern design elements to create a unique, edgy aesthetic.',
                'category_id' => 2,
            ],
        ]);

        // Style of Hand-lettering & Design [ 11 - 12 ]
        CalligraphyStyle::factory()->createMany([
            [
                'style_id' => 11,
                'style_name' => '3D lettering',
                'style_description' => '3D lettering uses shading and perspective to create the illusion of depth,
                giving the letters a three-dimensional quality. This style is often used for logos, signage,
                and other designs that need to stand out.',
                'category_id' => 3,
            ],
            [
                'style_id' => 12,
                'style_name' => 'Vintage lettering',
                'style_description' => 'Vintage lettering refers to a style of typography or lettering that is
                reminiscent of the past, particularly from the early 20th century or earlier.
                This style often features ornate and elaborate letterforms with intricate details and serifs,
                and is typically characterized by a sense of nostalgia or retro charm.',
                'category_id' => 3,
            ],
        ]);

        // Style of Modern Calligraphy [ 13 - 14 ]
        CalligraphyStyle::factory()->createMany([
            [
                'style_id' => 13,
                'style_name' => 'Copperplate',
                'style_description' => 'Copperplate is a traditional calligraphy style that has been adapted
                for modern use. It features a delicate and flowing script, with thin upstrokes and thicker downstrokes.',
                'category_id' => 4,
            ],
            [
                'style_id' => 14,
                'style_name' => 'Chalkboard art',
                'style_description' => 'Chalkboard art refers to the practice of creating artwork or lettering on a
                chalkboard surface. It is a popular form of modern hand-lettering and graphic design that has gained
                popularity in recent years due to its versatility and rustic charm.',
                'category_id' => 4,
            ],
        ]);
    }
}
