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
                'style_name' => 'Vietnam calligraphy',
                'style_image' => 'uploads/styleImages/7f938736ef17c0d85fbdbcf7f15de02f.jpg',
                'style_description' => 'Known as "Thư Pháp Việt Nam" in Vietnamese,
                is an important part of Vietnamese culture and has a long history dating back to ancient times.
                Vietnamese calligraphy uses the Roman alphabet and is typically written in black ink on white paper or silk.',
                'category_id' => 1,
            ],
            [
                'style_id' => 2,
                'style_name' => 'Arabic calligraphy',
                'style_image' => 'uploads/styleImages/4472c0b5f6158a885a6c335c4c52a6f2.jpg',
                'style_description' => 'Known as "khatt", is characterized by its flowing, curved lines and intricate
                patterns. It is considered a sacred art form in Islamic culture and is often used to write religious texts.',
                'category_id' => 1,
            ],
            [
                'style_id' => 3,
                'style_name' => 'Chinese calligraphy',
                'style_image' => 'uploads/styleImages/1280px-Wang_Xianzi_Imitation_by_Tang_Dynasty.jpg',
                'style_description' => 'Known as "Shūfǎ" in Chinese, Chinese calligraphy is one of the oldest and most
                revered forms of calligraphy. It is characterized by its emphasis on brush strokes and ink flow,
                with the aim of creating a harmonious balance between the written characters and the surrounding space.',
                'category_id' => 1,
            ],
            [
                'style_id' => 4,
                'style_name' => 'Korea calligraphy',
                'style_image' => 'uploads/styleImages/Calligraphy-art-works-Korea.jpg',
                'style_description' => 'Known as "Seoye", Korean calligraphy is characterized by its use of simplified
                and graceful lines. It often emphasizes the beauty of individual strokes rather than the overall composition.',
                'category_id' => 1,
            ],
            [
                'style_id' => 5,
                'style_name' => 'Japan calligraphy',
                'style_image' => 'uploads/styleImages/5a0b5c2705f29626c329cdc841d7113f.jpg',
                'style_description' => 'Known as "Shodō" in Japanese, Japanese calligraphy is influenced by
                Chinese calligraphy but has its own distinct style. It emphasizes the beauty of simple lines and the
                balance between black ink and white space. Japanese calligraphy is often used in Zen meditation and martial arts.',
                'category_id' => 1,
            ],
            [
                'style_id' => 6,
                'style_name' => 'Western calligraphy',
                'style_image' => 'uploads/styleImages/English_-_Rochester_Bible_-_Walters_W18_-_Reverse_Detail.jpg',
                'style_description' => 'Western calligraphy has a long history dating back to the Roman Empire.
                It includes various styles such as Gothic, Italic, and Copperplate. Western calligraphy is known
                for its use of a pointed pen or quill to create thick and thin lines, as well as its emphasis on
                legibility and readability.',
                'category_id' => 1,
            ],
            [
                'style_id' => 7,
                'style_name' => 'Greek calligraphy',
                'style_image' => 'uploads/styleImages/maxresdefault.jpg',
                'style_description' => 'Greek calligraphy refers to the art of beautiful writing in the Greek language,
                using a variety of scripts and styles. The Greek alphabet has a long history and has been used for
                writing since the 8th century BC.',
                'category_id' => 1,
            ],
        ]);

        // Style of Contemporary Calligraphy [ 8 - 13 ]
        CalligraphyStyle::factory()->createMany([
            [
                'style_id' => 8,
                'style_name' => 'Brush calligraphy',
                'style_image' => 'uploads/styleImages/47899951f15b7c121dd7cd534634d476.jpg',
                'style_description' => 'Brush calligraphy is a popular style of contemporary calligraphy that uses a
                brush instead of a traditional pen or nib to create letters and strokes.
                This style is often characterized by its flowing, loose lines and expressive brushwork.',
                'category_id' => 2,
            ],
            [
                'style_id' => 9,
                'style_name' => 'Modern script',
                'style_image' => 'uploads/styleImages/5de4bd91afa69e65d74ebf613a83feb6110c81d76bf2396354c491f04e0470ee.jpg',
                'style_description' => 'Modern script calligraphy is a contemporary take on traditional script
                calligraphy that emphasizes flowing, organic lines and unique letterforms.
                This style often incorporates decorative flourishes and ligatures for added flair.',
                'category_id' => 2,
            ],
            [
                'style_id' => 10,
                'style_name' => 'Gothic calligraphy',
                'style_image' => 'uploads/styleImages/5e95f21e702f9039de70a73c8a298884.jpg',
                'style_description' => 'Gothic calligraphy is a style of calligraphy that evolved from medieval
                illuminated manuscripts. In contemporary gothic calligraphy, traditional gothic letterforms are
                often combined with modern design elements to create a unique, edgy aesthetic.',
                'category_id' => 2,
            ],
            [
                'style_id' => 11,
                'style_name' => 'Hand lettering',
                'style_image' => 'uploads/styleImages/f9d98920c07b5a88e34ec383aca96469.jpg',
                'style_description' => 'Hand lettering is a contemporary style of calligraphy that is often used for
                branding and graphic design. This style emphasizes clean, legible lettering with minimal flourishes or decorative elements.',
                'category_id' => 2,
            ],
            [
                'style_id' => 12,
                'style_name' => 'Graffiti calligraphy',
                'style_image' => 'uploads/styleImages/warios_calligraffiti_gallery_about_page_desktop.jpg',
                'style_description' => 'Graffiti calligraphy is a style of contemporary calligraphy that is influenced
                 by street art and graffiti culture. This style often incorporates bold, expressive lettering with a rough, textured feel.',
                'category_id' => 2,
            ],
            [
                'style_id' => 13,
                'style_name' => 'Experimental calligraphy',
                'style_image' => 'uploads/styleImages/a08582ad32858423854473816ee6f7c9.jpg',
                'style_description' => 'Experimental calligraphy is a contemporary style that pushes the boundaries of
                the art form by incorporating new techniques, materials, and media. This can include using digital tools,
                 mixed media, and even 3D printing to create unique and innovative calligraphy designs.',
                'category_id' => 2,
            ],
        ]);

        // Style of Hand-lettering & Design [ 14 - 19 ]
        CalligraphyStyle::factory()->createMany([
            [
                'style_id' => 14,
                'style_name' => '3D lettering',
                'style_image' => 'uploads/styleImages/3898d26772127b4ca71d55e46662ea34.jpg',
                'style_description' => '3D lettering uses shading and perspective to create the illusion of depth,
                giving the letters a three-dimensional quality. This style is often used for logos, signage,
                and other designs that need to stand out.',
                'category_id' => 3,
            ],
            [
                'style_id' => 15,
                'style_name' => 'Vintage lettering',
                'style_image' => 'uploads/styleImages/6d617454cb45c35f4add2aa994305799.jpg',
                'style_description' => 'Vintage lettering refers to a style of typography or lettering that is
                reminiscent of the past, particularly from the early 20th century or earlier.
                This style often features ornate and elaborate letterforms with intricate details and serifs,
                and is typically characterized by a sense of nostalgia or retro charm.',
                'category_id' => 3,
            ],
            [
                'style_id' => 16,
                'style_name' => 'Modern lettering',
                'style_image' => 'uploads/styleImages/9fd83199bb40ea2977b7f5313f3a3665.jpg',
                'style_description' => 'Modern lettering is a more minimalist and clean style of hand-lettering that emphasizes
                simplicity and legibility. This style is often used for more contemporary or minimalist designs.',
                'category_id' => 3,
            ],
            [
                'style_id' => 17,
                'style_name' => 'Illustrated lettering',
                'style_image' => 'uploads/styleImages/cd55d0ce2c609274944b9494a5a66bae.jpg',
                'style_description' => 'Illustrated lettering combines hand-drawn illustrations with lettering to create
                unique and playful designs. This style is often used for book covers, packaging, and other creative projects.',
                'category_id' => 3,
            ],
            [
                'style_id' => 18,
                'style_name' => 'Brush lettering',
                'style_image' => 'uploads/styleImages/460b4a29124629.55e3f5e8b6b71.jpg',
                'style_description' => 'Brush lettering uses a brush pen or paintbrush to create thick and thin strokes,
                giving the letters a flowing, organic feel. This style is often used for more casual or playful designs.',
                'category_id' => 3,
            ],
            [
                'style_id' => 19,
                'style_name' => 'Calligraphic lettering',
                'style_image' => 'uploads/styleImages/7f387d22245751.5630f10c3da6c.jpg',
                'style_description' => 'Calligraphic lettering is a style that combines calligraphy and hand-lettering
                techniques to create elegant, flowing letterforms. This style is often used for formal or sophisticated designs.',
                'category_id' => 3,
            ],
        ]);

        // Style of Modern Calligraphy [ 20 - 14 ]
        CalligraphyStyle::factory()->createMany([
            [
                'style_id' => 20,
                'style_name' => 'Copperplate',
                'style_image' => 'uploads/styleImages/80e5595f84db441aa38637f36688cc16.jpg',
                'style_description' => 'Copperplate is a traditional calligraphy style that has been adapted
                for modern use. It features a delicate and flowing script, with thin upstrokes and thicker downstrokes.',
                'category_id' => 4,
            ],
            [
                'style_id' => 21,
                'style_name' => 'Chalkboard art',
                'style_image' => 'uploads/styleImages/d5f08421bcc96b4835224925d599723c.jpg',
                'style_description' => 'Chalkboard art refers to the practice of creating artwork or lettering on a
                chalkboard surface. It is a popular form of modern hand-lettering and graphic design that has gained
                popularity in recent years due to its versatility and rustic charm.',
                'category_id' => 4,
            ],
            [
                'style_id' => 22,
                'style_name' => 'Blackletter',
                'style_image' => 'uploads/styleImages/b1ac32a5684fb156e9f2845e524eef25.jpg',
                'style_description' => 'Blackletter is a modern calligraphy style that takes inspiration from old German
                 and English manuscripts. It often features dense, ornate lettering with sharp, angular shapes and heavy serifs.',
                'category_id' => 4,
            ],
            [
                'style_id' => 23,
                'style_name' => 'Watercolor lettering',
                'style_image' => 'uploads/styleImages/ac0b37a19eccf72b21bd3fe11c608c14.jpg',
                'style_description' => 'Watercolor lettering is a modern calligraphy style that incorporates watercolor
                paint into the design. The paint is often used to create a gradient effect, adding depth and dimension to the lettering.',
                'category_id' => 4,
            ],
            [
                'style_id' => 24,
                'style_name' => 'Modern script',
                'style_image' => 'uploads/styleImages/qqq1223.jpg',
                'style_description' => 'Modern script is a modern calligraphy style that emphasizes simplicity and legibility.
                It often features clean, flowing letterforms with minimal flourishes or ornamentation.',
                'category_id' => 4,
            ],
            [
                'style_id' => 25,
                'style_name' => 'Gothic script',
                'style_image' => 'uploads/styleImages/bea78df6097d8e09b3cbba43943fb122.jpg',
                'style_description' => 'Gothic script is a modern calligraphy style that takes inspiration from medieval
                gothic lettering. It often features bold, blocky lettering with pointed serifs and angular shapes.',
                'category_id' => 4,
            ],
        ]);
    }
}
