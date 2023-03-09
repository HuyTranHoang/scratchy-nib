<?php

namespace Database\Seeders;

use App\Models\Calligraphy;
use Illuminate\Database\Seeder;

class CalligraphySeeder extends Seeder
{
    public function run(): void
    {

        // Traditional Calligraphy
            //Vietnam Calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => 'Lộc',
                'calligraphy_description' => 'Which mean fortune, success, the reward with merit, dedication.',
                'style_id' => '1'
            ],
            [
                'calligraphy_name' => 'Mẹ',
                'calligraphy_description' => 'Which mean mom.',
                'style_id' => '1'
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
            [
                'calligraphy_name' => 'Allah katında da güzeldir',
                'calligraphy_description' => 'Mü’minlerin güzel gördükleri şey, Allah katında da güzeldir. Hadis-i Şerif Hat: Sami Efendi',
                'style_id' => '2',
            ],
        ]);
            //Chinese calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => 'Tang Dynasty copy of 新婦地黃湯帖',
                'calligraphy_description' => "Currently in the Taito Ward Calligraphy Museum (台東区立書道博物館) ",
                'style_id' => '3',
            ],
            [
                'calligraphy_name' => 'Lantingji Xu',
                'calligraphy_description' => "The most famous Chinese calligraphic work",
                'style_id' => '3',
            ],
            [
                'calligraphy_name' => 'Age',
                'calligraphy_description' => "Chinese calligraphy'age' by sihui128 on DeviantArt",
                'style_id' => '3',
            ],
        ]);
            //Korean calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => 'Yun Baek-ha (Yun Sun)',
                'calligraphy_description' => "A calligraphic handscroll with part of the Buddhist Suranga Sūtra,
                Choson/Joseon dynasty, 18th century, from Korea (© The Trustees of the British Museum)",
                'style_id' => '4',
            ],
            [
                'calligraphy_name' => 'Cursive Gungche font',
                'calligraphy_description' => "Image Courtesy dramasROK",
                'style_id' => '4',
            ],
            [
                'calligraphy_name' => 'Calligraphy works',
                'calligraphy_description' => "By Kim Jeong Hui (1786-1856), a calligrapher during the Joseon Dynasty considered to be the finest in Korean history.",
                'style_id' => '4',
            ],
            [
                'calligraphy_name' => 'Song composed',
                'calligraphy_description' => "The first printed copy of a song composed by King Sejong the Great, the inventor of Hangeul.",
                'style_id' => '4',
            ],
            [
                'calligraphy_name' => 'Mountain, blue mountain',
                'calligraphy_description' => 'A calligraphic work by calligraphy artist Kim Sung-tae.
                It reads, "Mountain, blue mountain," a line from the poem Cheongsando by Park Du Sin.',
                'style_id' => '4',
            ],
        ]);
            //Japanese calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => '別無工夫',
                'calligraphy_description' => 'by Musō Soseki (1275–1351, Japanese zen master, poet, and alligrapher.
                The characters "別無工夫" ("no spiritual meaning") are written in a flowing, connected sōsho style.',
                'style_id' => '5',
            ],
            [
                'calligraphy_name' => 'Karate (空手)',
                'calligraphy_description' => ' is a martial art developed in the Ryukyu Islands in what is now Okinawa, Japan.
                It developed from the indigenous martial arts of Ryukyu Islands (called te (手), literally "hand"; tii in Okinawan)
                under the influence of Chinese martial arts, particularly to that of the Fujian White Crane.
                Karate is a striking art using punching, kicking, knee strikes, elbow strikes and open hand techniques
                such as knife-hands, spear-hands, and palm-heel strikes. In some styles, grappling, throws, joint locks,
                 restraints, and vital point strikes are also taught. A karate practitioner is called a karateka (空手家)',
                'style_id' => '5',
            ],
            [
                'calligraphy_name' => 'Yume',
                'calligraphy_description' => "Cursive calligraphy of 'yume', meaning dream.",
                'style_id' => '5',
            ],
            [
                'calligraphy_name' => 'Dream',
                'calligraphy_description' => "Calligraphy of 夢 in japanese",
                'style_id' => '5',
            ],
        ]);
            //Western calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Paul's epistle to Philemon",
                'calligraphy_description' => 'Incipit epistula ad phylemonem. PAULUS VINCTUS JESU CHRISTI & timotheus frater,
                philemoni dilecto & adjutori nostro, & appie sorori carissime, & archippo commilitoni nostro, & ecclesie,
                que in domo tua est. Gratia vobis, et pax a deo patre nostro, et domino iesu christo. Gratias ago deo meo,
                semper memoriam tui faciens in [orationibus meis].',
                'style_id' => '6',
            ],
            [
                'calligraphy_name' => 'Monastery',
                'calligraphy_description' => 'Calligraphy in a Vulgate of AD 1407 on display in Malmesbury Abbey,
                 Wiltshire, England. The Bible was hand written in Belgium, by Gerard Brils, for reading aloud
                in a monastery.',
                'style_id' => '6',
            ],
            [
                'calligraphy_name' => 'FJ Brechtel',
                'calligraphy_description' => 'FJ Brechtel calligraphy of 16th century calligraphy.',
                'style_id' => '6',
            ],
        ]);
            //Greek Calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "I always stand by your side",
                'calligraphy_description' => '',
                'style_id' => '7',
            ],
            [
                'calligraphy_name' => 'Imazing',
                'calligraphy_description' => '',
                'style_id' => '7',
            ],
        ]);

        // Contemporary Calligraphy
            // Brush calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Experimental calligraphy",
                'calligraphy_description' => '',
                'style_id' => '8',
            ],
            [
                'calligraphy_name' => "Love it catches you when you're not looking",
                'calligraphy_description' => '',
                'style_id' => '8',
            ],
            [
                'calligraphy_name' => "Sometimes you win & sometimes you learn",
                'calligraphy_description' => '',
                'style_id' => '8',
            ],
            [
                'calligraphy_name' => "We lightup the world",
                'calligraphy_description' => '',
                'style_id' => '8',
            ],
            [
                'calligraphy_name' => "Pin on lettering",
                'calligraphy_description' => '',
                'style_id' => '8',
            ],
            [
                'calligraphy_name' => "Guardian of galaxy",
                'calligraphy_description' => '',
                'style_id' => '8',
            ],
        ]);
            // Modern script
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Visually",
                'calligraphy_description' => '',
                'style_id' => '9',
            ],
            [
                'calligraphy_name' => "Bellany",
                'calligraphy_description' => '',
                'style_id' => '9',
            ],
            [
                'calligraphy_name' => "Delightful",
                'calligraphy_description' => '',
                'style_id' => '9',
            ],
        ]);
            //  Gothic calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Freedom",
                'calligraphy_description' => '',
                'style_id' => '10',
            ],
            [
                'calligraphy_name' => "Born to be free",
                'calligraphy_description' => '',
                'style_id' => '10',
            ],
            [
                'calligraphy_name' => "Never give up",
                'calligraphy_description' => '',
                'style_id' => '10',
            ],
            [
                'calligraphy_name' => "You are the one ",
                'calligraphy_description' => '',
                'style_id' => '10',
            ],
        ]);
            //  Hand lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Hey jude",
                'calligraphy_description' => '',
                'style_id' => '11',
            ],
            [
                'calligraphy_name' => "Sasan Nasernia Ink Calligraphy, on Art Paper",
                'calligraphy_description' => '',
                'style_id' => '11',
            ],
            [
                'calligraphy_name' => "Sweet Calligraphy",
                'calligraphy_description' => '',
                'style_id' => '11',
            ],
            [
                'calligraphy_name' => "Give more than you receive",
                'calligraphy_description' => '',
                'style_id' => '11',
            ],
        ]);
        //  Graffiti calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Alphabet",
                'calligraphy_description' => '',
                'style_id' => '12',
            ],
            [
                'calligraphy_name' => "Warios",
                'calligraphy_description' => '',
                'style_id' => '12',
            ],
            [
                'calligraphy_name' => "Calligraffiti",
                'calligraphy_description' => '',
                'style_id' => '12',
            ],
        ]);
        //  Experimental calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "네이버 블로그",
                'calligraphy_description' => '인생이란 본시 어디에도 의탁할 곳이 없이 다만 하늘을 이고 땅을 밟은 채 떠도는 존재일 뿐이라는 사실을.',
                'style_id' => '13',
            ],
            [
                'calligraphy_name' => "Alphabet",
                'calligraphy_description' => '',
                'style_id' => '13',
            ],
            [
                'calligraphy_name' => "Weisheit",
                'calligraphy_description' => '',
                'style_id' => '13',
            ],
        ]);

        // Hand-lettering & Design
            // 3D lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Aloha vibes",
                'calligraphy_description' => '',
                'style_id' => '14',
            ],
            [
                'calligraphy_name' => "Art Schools",
                'calligraphy_description' => '',
                'style_id' => '14',
            ],
            [
                'calligraphy_name' => "Handlettering 3D style",
                'calligraphy_description' => '',
                'style_id' => '14',
            ],
            [
                'calligraphy_name' => "Let your light shine",
                'calligraphy_description' => '',
                'style_id' => '14',
            ],
            [
                'calligraphy_name' => "South",
                'calligraphy_description' => '',
                'style_id' => '14',
            ],
        ]);
            // Vintage lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "We have recorded everything in a book",
                'calligraphy_description' => '',
                'style_id' => '15',
            ],
            [
                'calligraphy_name' => "Salida wine fest",
                'calligraphy_description' => '',
                'style_id' => '15',
            ],
            [
                'calligraphy_name' => "Roll with it & gain momentum",
                'calligraphy_description' => '',
                'style_id' => '15',
            ],
            [
                'calligraphy_name' => "Autumn and spring",
                'calligraphy_description' => '',
                'style_id' => '15',
            ],
            [
                'calligraphy_name' => "Work hard so you can shop harder",
                'calligraphy_description' => '',
                'style_id' => '15',
            ],
            [
                'calligraphy_name' => "Coffee Tin Signs",
                'calligraphy_description' => '',
                'style_id' => '15',
            ],
            [
                'calligraphy_name' => "I’m in love",
                'calligraphy_description' => '',
                'style_id' => '15',
            ],
        ]);
            // Modern lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Just visit this plane ",
                'calligraphy_description' => '',
                'style_id' => '16',
            ],
            [
                'calligraphy_name' => "Clubnotes",
                'calligraphy_description' => '',
                'style_id' => '16',
            ],
            [
                'calligraphy_name' => "Tiếng nói của vạn vật",
                'calligraphy_description' => 'Voice of all things',
                'style_id' => '16',
            ],
            [
                'calligraphy_name' => "Tràng Giang",
                'calligraphy_description' => 'Vietnamese literature',
                'style_id' => '16',
            ],
            [
                'calligraphy_name' => "Người lái đò sông đà",
                'calligraphy_description' => 'Vietnamese literature',
                'style_id' => '16',
            ],
            [
                'calligraphy_name' => "Rừng xà nu",
                'calligraphy_description' => 'Vietnamese literature',
                'style_id' => '16',
            ],
            [
                'calligraphy_name' => "Chuyện người con gái nam xương",
                'calligraphy_description' => 'Vietnamese literature',
                'style_id' => '16',
            ],
            [
                'calligraphy_name' => "Vào phủ chúa trịnh",
                'calligraphy_description' => 'Vietnamese literature',
                'style_id' => '16',
            ],
            [
                'calligraphy_name' => "Hoàng lê nhất thống chí",
                'calligraphy_description' => 'Vietnamese literature',
                'style_id' => '16',
            ],
            [
                'calligraphy_name' => "September",
                'calligraphy_description' => 'Is a month of the year written in different ways',
                'style_id' => '16',
            ],
        ]);
            // Illustrated lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "R letter",
                'calligraphy_description' => '',
                'style_id' => '17',
            ],
            [
                'calligraphy_name' => "S letter",
                'calligraphy_description' => '',
                'style_id' => '17',
            ],
            [
                'calligraphy_name' => "Summer",
                'calligraphy_description' => '',
                'style_id' => '17',
            ],
            [
                'calligraphy_name' => "Summver Vacation",
                'calligraphy_description' => '',
                'style_id' => '17',
            ],
            [
                'calligraphy_name' => "The World",
                'calligraphy_description' => '',
                'style_id' => '17',
            ],
        ]);
            // Brush lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Pink",
                'calligraphy_description' => '',
                'style_id' => '18',
            ],
            [
                'calligraphy_name' => "Back in black",
                'calligraphy_description' => '',
                'style_id' => '18',
            ],
            [
                'calligraphy_name' => "I have found the one whom my soul loves",
                'calligraphy_description' => '',
                'style_id' => '18',
            ],
            [
                'calligraphy_name' => "Brave",
                'calligraphy_description' => '',
                'style_id' => '18',
            ],
            [
                'calligraphy_name' => "Hold back the river let me look in your eyes",
                'calligraphy_description' => '',
                'style_id' => '18',
            ],
            [
                'calligraphy_name' => "Smells like mint",
                'calligraphy_description' => '',
                'style_id' => '18',
            ],
            [
                'calligraphy_name' => "Never forget who you are",
                'calligraphy_description' => '',
                'style_id' => '18',
            ],
            [
                'calligraphy_name' => "Slow progress is better than no progress",
                'calligraphy_description' => '',
                'style_id' => '18',
            ],
        ]);
            // Calligraphic lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "It always seem impossible until it's done",
                'calligraphy_description' => '',
                'style_id' => '19',
            ],
            [
                'calligraphy_name' => "Don’t give up",
                'calligraphy_description' => '',
                'style_id' => '19',
            ],
            [
                'calligraphy_name' => "Get better, don’t try to be just good",
                'calligraphy_description' => '',
                'style_id' => '19',
            ],
            [
                'calligraphy_name' => "Happy",
                'calligraphy_description' => '',
                'style_id' => '19',
            ],
            [
                'calligraphy_name' => "Be friendly",
                'calligraphy_description' => '',
                'style_id' => '19',
            ],
            [
                'calligraphy_name' => "Live your life joyfully",
                'calligraphy_description' => '',
                'style_id' => '19',
            ],
            [
                'calligraphy_name' => "Happiness never grow olds",
                'calligraphy_description' => '',
                'style_id' => '19',
            ],
            [
                'calligraphy_name' => "Hey you’re so great",
                'calligraphy_description' => '',
                'style_id' => '19',
            ],
            [
                'calligraphy_name' => "Make - Love - Give",
                'calligraphy_description' => '',
                'style_id' => '19',
            ],
        ]);
    }
}
