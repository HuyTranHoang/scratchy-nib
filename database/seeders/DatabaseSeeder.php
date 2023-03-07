<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Calligraphy;
use App\Models\CalligraphyCategory;
use App\Models\CalligraphyStyle;
use App\Models\Feedback;
use App\Models\GalleryImage;
use App\Models\Role;
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

        Role::factory()->createMany([
            [
                'role_name' => 'admin'
            ],
            [
                'role_name' => 'member'
            ]
        ]);

        User::factory()->createMany([
            [
                'name' => 'Trần Hoàng Huy',
                'email' => 'HTH@example.com',
                'password' => Hash::make('test'),
                'role_id' => '1'
            ],
            [
                'name' => 'Huỳnh Chí Bảo',
                'email' => 'BHC@example.com',
                'password' => Hash::make('test'),
                'role_id' => '1'
            ],
            [
                'name' => 'Trần Phát Đạt',
                'email' => 'DTP@example.com',
                'password' => Hash::make('test'),
                'role_id' => '1'
            ],
            [
                'name' => 'Lệ Thị Bưởi',
                'email' => 'BLT@example.com',
                'password' => Hash::make('test'),
                'role_id' => '2'
            ],
            [
                'name' => 'Lê Văn Tèo',
                'email' => 'TLV@example.com',
                'password' => Hash::make('test'),
                'role_id' => '2'
            ],
            [
                'name' => 'Võ Công Tình',
                'email' => 'TVCH@example.com',
                'password' => Hash::make('test'),
                'role_id' => '2'
            ],
            [
                'name' => 'Lê Thị Bé',
                'email' => 'LTB@example.com',
                'password' => Hash::make('test'),
                'role_id' => '2'
            ],
            [
                'name' => 'Lệ Hồng Cánh Sen',
                'email' => 'SLHC@example.com',
                'password' => Hash::make('test'),
                'role_id' => '2'
            ],
            [
                'name' => 'Nguyễn Thị Lá É',
                'email' => 'ENTL@example.com',
                'password' => Hash::make('test'),
                'role_id' => '2'
            ],
            [
                'name' => 'Lê Công Vinh',
                'email' => 'VLC@example.com',
                'password' => Hash::make('test'),
                'role_id' => '2'
            ]
        ]);

        CalligraphyCategory::factory()->createMany([
            [
                'category_id' => 1,
                'category_name' => 'Traditional Calligraphy',
                'category_description' => 'Traditional calligraphy is the art of beautiful writing by hand,
                often using special pens or brushes and ink. It is an ancient art form that has been practiced for
                thousands of years in various cultures around the world, including China, Japan, Korea,
                and many Islamic countries.',
            ],
            [
                'category_id' => 2,
                'category_name' => 'Contemporary Calligraphy',
                'category_description' => 'Contemporary calligraphy is a modern interpretation of traditional calligraphy
                that incorporates new techniques, materials, and styles. While traditional calligraphy emphasizes
                adherence to established rules and forms, contemporary calligraphy is more experimental and often
                allows for more creative expression.',
            ],
            [
                'category_id' => 3,
                'category_name' => 'Hand-lettering & Design',
                'category_description' => 'Hand-lettering and design is a type of visual art that combines hand-drawn
                lettering and design elements to create a unique and cohesive visual message.
                Unlike traditional calligraphy, which is focused on creating stylized writing using a particular
                script, hand-lettering is all about creating letterforms that are uniquely designed for a specific purpose or message.',
            ],
            [
                'category_id' => 4,
                'category_name' => 'Modern Calligraphy',
                'category_description' => 'Modern calligraphy is a contemporary form of calligraphy that combines
                traditional calligraphy techniques with modern design elements. It has become increasingly popular
                in recent years, especially with the rise of social media platforms like Instagram, where modern
                calligraphers showcase their work.',
            ],
        ]);

        // Style of Traditional Calligraphy [ 1 - 7 ]
        CalligraphyStyle::factory()->createMany([
            [
                'style_name' => 'Vietnam Caligraphy',
                'style_description' => 'Known as "Thư Pháp Việt Nam" in Vietnamese,
                is an important part of Vietnamese culture and has a long history dating back to ancient times.
                Vietnamese calligraphy uses the Roman alphabet and is typically written in black ink on white paper or silk.',
                'category_id' => 1,
            ],
            [
                'style_name' => 'Arabic Calligraphy',
                'style_description' => 'Known as "khatt", is characterized by its flowing, curved lines and intricate
                patterns. It is considered a sacred art form in Islamic culture and is often used to write religious texts.',
                'category_id' => 1,
            ],
            [
                'style_name' => 'Chinese Calligraphy',
                'style_description' => 'Known as "Shūfǎ" in Chinese, Chinese calligraphy is one of the oldest and most
                revered forms of calligraphy. It is characterized by its emphasis on brush strokes and ink flow,
                with the aim of creating a harmonious balance between the written characters and the surrounding space.',
                'category_id' => 1,
            ],
            [
                'style_name' => 'Korea Calligraphy',
                'style_description' => 'Known as "Seoye", Korean calligraphy is characterized by its use of simplified
                and graceful lines. It often emphasizes the beauty of individual strokes rather than the overall composition.',
                'category_id' => 1,
            ],
            [
                'style_name' => 'Japan Calligraphy',
                'style_description' => 'Known as "Shodō" in Japanese, Japanese calligraphy is influenced by
                Chinese calligraphy but has its own distinct style. It emphasizes the beauty of simple lines and the
                balance between black ink and white space. Japanese calligraphy is often used in Zen meditation and martial arts.',
                'category_id' => 1,
            ],
            [
                'style_name' => 'Western Calligraphy',
                'style_description' => 'Western calligraphy has a long history dating back to the Roman Empire.
                It includes various styles such as Gothic, Italic, and Copperplate. Western calligraphy is known
                for its use of a pointed pen or quill to create thick and thin lines, as well as its emphasis on
                legibility and readability.',
                'category_id' => 1,
            ],
            [
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
                'style_name' => 'Brush calligraphy',
                'style_description' => 'Brush calligraphy is a popular style of contemporary calligraphy that uses a
                brush instead of a traditional pen or nib to create letters and strokes.
                This style is often characterized by its flowing, loose lines and expressive brushwork.',
                'category_id' => 2,
            ],
            [
                'style_name' => 'Modern script',
                'style_description' => 'Modern script calligraphy is a contemporary take on traditional script
                calligraphy that emphasizes flowing, organic lines and unique letterforms.
                This style often incorporates decorative flourishes and ligatures for added flair.',
                'category_id' => 2,
            ],
            [
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
                'style_name' => '3D lettering',
                'style_description' => '3D lettering uses shading and perspective to create the illusion of depth,
                giving the letters a three-dimensional quality. This style is often used for logos, signage,
                and other designs that need to stand out.',
                'category_id' => 3,
            ],
            [
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
                'style_name' => 'Copperplate',
                'style_description' => 'Copperplate is a traditional calligraphy style that has been adapted
                for modern use. It features a delicate and flowing script, with thin upstrokes and thicker downstrokes.',
                'category_id' => 4,
            ],
            [
                'style_name' => 'Chalkboard art',
                'style_description' => 'Chalkboard art refers to the practice of creating artwork or lettering on a
                chalkboard surface. It is a popular form of modern hand-lettering and graphic design that has gained
                popularity in recent years due to its versatility and rustic charm.',
                'category_id' => 4,
            ],
        ]);

        // Calligraphy of Traditional Calligraphy
            //Vietnam Calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => 'Mẹ',
                'calligraphy_description' => 'Which mean mom in vietnamese.',
                'style_id' => '1',
            ],
            [
                'calligraphy_name' => 'Đất Người Việt Để Yên Cho Người Việt',
                'calligraphy_description' => 'Vietnamese land of Vietnamese people.',
                'style_id' => '1',
            ],
            [
                'calligraphy_name' => 'Cả Một Trời Thương Nhớ',
                'calligraphy_description' => 'Sky of memory.',
                'style_id' => '1',
            ],
            [
                'calligraphy_name' => 'Biết khi nào gặp lại',
                'calligraphy_description' => 'Know when to see you again?.',
                'style_id' => '1',
            ],
            [
                'calligraphy_name' => 'An Trí Thảnh Thơi',
                'calligraphy_description' => 'Peace of mind.',
                'style_id' => '1',
            ],
            [
                'calligraphy_name' => 'Tôn Sư Trọng Đạo',
                'calligraphy_description' => 'Respect life morality and property.',
                'style_id' => '1',
            ],
        ]);
            //Arabic Calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => 'Ibn al-Bawwab',
                'calligraphy_description' => "A copy of the Qur'an by Ibn al-Bawwab in the year 1000/1001 CE,
                thought to be the earliest existing example of a Qur'an written in a cursive script.",
                'style_id' => '2',
            ],
            [
                'calligraphy_name' => 'Allah',
                'calligraphy_description' => 'The Arabic word "Allah" (الله) which means "God" or "The Almighty" in Islam.
                It is an example of traditional Arabic calligraphy, a beautiful and popular art form in Islamic culture.
                Arabic calligraphy artists typically use a quill pen or ostrich feather to write the Arabic alphabet
                and words in different styles and sizes to create exquisite calligraphic artworks.',
                'style_id' => '2',
            ],
            [
                'calligraphy_name' => 'Amanah',
                'calligraphy_description' => 'The word "amanah" (أمانة) written in Arabic calligraphy.
                The word "amanah" has various meanings in Arabic, but it generally refers to trust, honesty, or responsibility.
                It is a common word used in Islamic finance and business ethics.',
                'style_id' => '2',
            ],
            [
                'calligraphy_name' => 'Wallahu Khairur Raziqin',
                'calligraphy_description' => 'The word "Wallahu" in Arabic calligraphy is a combination of two words:
                "Wallah" and "Allahu". "Wallah" means "with Allah" or "for Allah", while "Allahu" means "God" or "the
                Almighty" in Islam. Therefore, "Wallahu" means "with Allah" or "for Allah", and is often used to show
                respect and reverence for God in Islamic culture.',
                'style_id' => '2',
            ],
            [
                'calligraphy_name' => 'Basmala',
                'calligraphy_description' => 'This is an Arabic calligraphy text known as "Basmala" (or "Bismillah")
                in Islamic culture. Basmala is an opening phrase in the Quran, used before starting any important action,
                and also used as a symbol of respect for God in Islamic culture. Specifically,
                Basmala means "In the name of God, the Most Gracious, the Most Merciful.”',
                'style_id' => '2',
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
                'image_name' => 'uploads/Hinh1.jpg',
                'image_description' => '',
                'calligraphy_id' => '1',
            ],
            [
                'image_name' => 'uploads/Hinh2.jpg',
                'image_description' => '',
                'calligraphy_id' => '2',
            ],
            [
                'image_name' => 'uploads/Hinh3.jpg',
                'image_description' => '',
                'calligraphy_id' => '3',
            ],
            [
                'image_name' => 'uploads/Hinh4.jpg',
                'image_description' => '',
                'calligraphy_id' => '4',
            ],
            [
                'image_name' => 'uploads/Hinh5.jpg',
                'image_description' => '',
                'calligraphy_id' => '5',
            ],
        ]);
    }
}
