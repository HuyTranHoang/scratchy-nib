<?php

namespace Database\Seeders;

use App\Models\Calligraphy;
use Illuminate\Database\Seeder;

class CalligraphySeeder extends Seeder
{
    public function run(): void
    {

        // Calligraphy of Traditional Calligraphy
            //Vietnam Calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => 'Mẹ',
                'calligraphy_description' => 'Which mean mom in vietnamese.',
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
    }
}
