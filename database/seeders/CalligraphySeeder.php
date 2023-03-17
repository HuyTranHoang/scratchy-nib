<?php

namespace Database\Seeders;

use App\Models\Calligraphy;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CalligraphySeeder extends Seeder
{
    public function run(): void
    {

        // Traditional Calligraphy
            //Vietnam Calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => 'Lộc',
                'calligraphy_description' => '"Lộc" in Vietnamese calligraphy can be written as "Lộc" or "Lộc Phát"
                (if you want to add the word "phát" which means prosperity). Vietnamese calligraphy has a long
                history and is heavily influenced by Chinese calligraphy. It is characterized by its flowing lines,
                graceful curves, and bold strokes. The Vietnamese alphabet has 29 letters, each with its own unique
                shape and form, making it a fascinating and beautiful script to work with. Vietnamese calligraphy
                is often used to write poetry, proverbs, and Buddhist scriptures, and it is considered an important
                aspect of Vietnamese culture.',
                'style_id' => '1',
                'created_at' => Carbon::now()->subMinutes(175),
                'updated_at' => Carbon::now()->subMinutes(175),

            ],
            [
                'calligraphy_name' => 'Mẹ',
                'calligraphy_description' => '"Mẹ" in Vietnamese calligraphy can be written as "Mẹ" or "Mẹ yêu"
                (if you want to add the word "yêu" which means love). Vietnamese calligraphy has a distinctive style
                and is characterized by its flowing strokes, elegant curves, and bold lines.
                The script is heavily influenced by Chinese calligraphy, but has its own unique features and characteristics.
                Vietnamese calligraphy is used to write a wide range of texts, including poetry, literature, and religious texts.
                It is considered an important part of Vietnamese culture and art.',
                'style_id' => '1',
                'created_at' => Carbon::now()->subMinutes(174),
                'updated_at' => Carbon::now()->subMinutes(174),
            ],
            [
                'calligraphy_name' => 'Đất Người Việt Để Yên Cho Người Việt',
                'calligraphy_description' => '"Đất Người Việt Để Yên Cho Người Việt" in Vietnamese calligraphy can be written as "Đất Người Việt Để Yên Cho Người Việt" or "Đất nước Việt Nam để yên cho nhân dân Việt Nam" (if you want to add a more complete meaning which translates to "Let the land of Vietnam be peaceful for the people of Vietnam"). Vietnamese calligraphy is a beautiful and elegant script that is often used to write important texts, such as poetry, literature, and religious scriptures. The script is characterized by its flowing strokes, bold lines, and graceful curves. It has a long and rich history and is considered an important part of Vietnamese culture and heritage.',
                'style_id' => '1',
                'created_at' => Carbon::now()->subMinutes(173),
                'updated_at' => Carbon::now()->subMinutes(173),
            ],
            [
                'calligraphy_name' => 'Cả Một Trời Thương Nhớ',
                'calligraphy_description' => 'In English, it translates to "A Sky Full of Longing and Fondness". This phrase is often used to express the depth of one\'s love or longing for someone or something. ',
                'style_id' => '1',
                'created_at' => Carbon::now()->subMinutes(172),
                'updated_at' => Carbon::now()->subMinutes(172),
            ],
            [
                'calligraphy_name' => 'Biết khi nào gặp lại',
                'calligraphy_description' => 'In English, it translates to "When Will We Meet Again?". This phrase is often used to express the hope or desire to see someone again in the future. Vietnamese calligraphy is a beautiful and expressive script that can convey the emotional depth and beauty of language in a unique and striking way.',
                'style_id' => '1',
                'created_at' => Carbon::now()->subMinutes(171),
                'updated_at' => Carbon::now()->subMinutes(171),
            ],
            [
                'calligraphy_name' => 'An Trí Thảnh Thơi',
                'calligraphy_description' => '"An Trí Thảnh Thơi" in Vietnamese is a phrase that can be translated to "Peaceful and Relaxed". This phrase is often used to describe a state of being or a desired state of mind where one is calm, tranquil, and at ease. Vietnamese calligraphy is a beautiful and intricate script that can convey the emotional depth and beauty of language in a unique and striking way.',
                'style_id' => '1',
                'created_at' => Carbon::now()->subMinutes(170),
                'updated_at' => Carbon::now()->subMinutes(170),
            ],
            [
                'calligraphy_name' => 'Tôn Sư Trọng Đạo',
                'calligraphy_description' => '"Tôn Sư Trọng Đạo" is a Vietnamese phrase that can be translated to "Respect the Teacher, Value the Moral Way". It is a Confucian teaching that emphasizes the importance of education and morality. Vietnamese calligraphy is a beautiful and expressive script that can convey the wisdom and depth of traditional Vietnamese culture in a unique and striking way.',
                'style_id' => '1',
                'created_at' => Carbon::now()->subMinutes(169),
                'updated_at' => Carbon::now()->subMinutes(169),
            ],
        ]);
            //Arabic Calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => 'Ibn al-Bawwab',
                'calligraphy_description' => "A copy of the Qur'an by Ibn al-Bawwab in the year 1000/1001 CE,
                thought to be the earliest existing example of a Qur'an written in a cursive script.",
                'style_id' => '2',
                'created_at' => Carbon::now()->subMinutes(168),
                'updated_at' => Carbon::now()->subMinutes(168),
            ],
            [
                'calligraphy_name' => 'Allah',
                'calligraphy_description' => 'The Arabic word "Allah" (الله) which means "God" or "The Almighty" in Islam.
                It is an example of traditional Arabic calligraphy, a beautiful and popular art form in Islamic culture.
                Arabic calligraphy artists typically use a quill pen or ostrich feather to write the Arabic alphabet
                and words in different styles and sizes to create exquisite calligraphic artworks.',
                'style_id' => '2',
                'created_at' => Carbon::now()->subMinutes(167),
                'updated_at' => Carbon::now()->subMinutes(167),
            ],
            [
                'calligraphy_name' => 'Amanah',
                'calligraphy_description' => 'The word "amanah" (أمانة) written in Arabic calligraphy.
                The word "amanah" has various meanings in Arabic, but it generally refers to trust, honesty, or responsibility.
                It is a common word used in Islamic finance and business ethics.',
                'style_id' => '2',
                'created_at' => Carbon::now()->subMinutes(166),
                'updated_at' => Carbon::now()->subMinutes(166),
            ],
            [
                'calligraphy_name' => 'Wallahu Khairur Raziqin',
                'calligraphy_description' => 'The word "Wallahu" in Arabic calligraphy is a combination of two words:
                "Wallah" and "Allahu". "Wallah" means "with Allah" or "for Allah", while "Allahu" means "God" or "the
                Almighty" in Islam. Therefore, "Wallahu" means "with Allah" or "for Allah", and is often used to show
                respect and reverence for God in Islamic culture.',
                'style_id' => '2',
                'created_at' => Carbon::now()->subMinutes(165),
                'updated_at' => Carbon::now()->subMinutes(165),
            ],
            [
                'calligraphy_name' => 'Basmala',
                'calligraphy_description' => 'This is an Arabic calligraphy text known as "Basmala" (or "Bismillah")
                in Islamic culture. Basmala is an opening phrase in the Quran, used before starting any important action,
                and also used as a symbol of respect for God in Islamic culture. Specifically,
                Basmala means "In the name of God, the Most Gracious, the Most Merciful.”',
                'style_id' => '2',
                'created_at' => Carbon::now()->subMinutes(164),
                'updated_at' => Carbon::now()->subMinutes(164),
            ],
            [
                'calligraphy_name' => 'Allah katında da güzeldir',
                'calligraphy_description' => 'Mü’minlerin güzel gördükleri şey, Allah katında da güzeldir. Hadis-i Şerif Hat: Sami Efendi',
                'style_id' => '2',
                'created_at' => Carbon::now()->subMinutes(163),
                'updated_at' => Carbon::now()->subMinutes(163),
            ],
        ]);
            //Chinese calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => 'Tang Dynasty copy of 新婦地黃湯帖',
                'calligraphy_description' => "Currently in the Taito Ward Calligraphy Museum (台東区立書道博物館) ",
                'style_id' => '3',
                'created_at' => Carbon::now()->subMinutes(162),
                'updated_at' => Carbon::now()->subMinutes(162),
            ],
            [
                'calligraphy_name' => 'Lantingji Xu',
                'calligraphy_description' => "Lantingji Xu (蘭亭集序) is one of the most famous Chinese calligraphy works. It was written by the famous Tang Dynasty calligrapher Wang Xizhi (王羲之) in 353 AD. The work consists of a preface and poems written by various poets who attended a gathering at Lanting (Orchid Pavilion) hosted by Wang Xizhi.
                Lantingji Xu is known for its exquisite and fluid calligraphy, as well as its literary and cultural significance. The preface in particular is considered a masterpiece of Chinese calligraphy, and has been widely studied and imitated by calligraphers throughout history.
                Today, Lantingji Xu is still considered a classic example of Chinese calligraphy and is treasured for its artistic and cultural value.",
                'style_id' => '3',
                'created_at' => Carbon::now()->subMinutes(161),
                'updated_at' => Carbon::now()->subMinutes(161),
            ],
            [
                'calligraphy_name' => 'Age',
                'calligraphy_description' => "Chinese calligraphy'age' by sihui128 on DeviantArt",
                'style_id' => '3',
                'created_at' => Carbon::now()->subMinutes(160),
                'updated_at' => Carbon::now()->subMinutes(160),
            ],
        ]);
            //Korean calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => 'Yun Baek-ha (Yun Sun)',
                'calligraphy_description' => "A calligraphic handscroll with part of the Buddhist Suranga Sūtra,
                Choson/Joseon dynasty, 18th century, from Korea (© The Trustees of the British Museum)",
                'style_id' => '4',
                'created_at' => Carbon::now()->subMinutes(159),
                'updated_at' => Carbon::now()->subMinutes(159),
            ],
            [
                'calligraphy_name' => 'Cursive Gungche font',
                'calligraphy_description' => "Image Courtesy dramasROK",
                'style_id' => '4',
                'created_at' => Carbon::now()->subMinutes(158),
                'updated_at' => Carbon::now()->subMinutes(158),
            ],
            [
                'calligraphy_name' => 'Calligraphy works',
                'calligraphy_description' => "By Kim Jeong Hui (1786-1856), a calligrapher during the Joseon Dynasty considered to be the finest in Korean history.",
                'style_id' => '4',
                'created_at' => Carbon::now()->subMinutes(157),
                'updated_at' => Carbon::now()->subMinutes(157),
            ],
            [
                'calligraphy_name' => 'Song composed',
                'calligraphy_description' => "The first printed copy of a song composed by King Sejong the Great, the inventor of Hangeul.",
                'style_id' => '4',
                'created_at' => Carbon::now()->subMinutes(156),
                'updated_at' => Carbon::now()->subMinutes(156),
            ],
            [
                'calligraphy_name' => 'Mountain, blue mountain',
                'calligraphy_description' => 'A calligraphic work by calligraphy artist Kim Sung-tae.
                It reads, "Mountain, blue mountain," a line from the poem Cheongsando by Park Du Sin.',
                'style_id' => '4',
                'created_at' => Carbon::now()->subMinutes(155),
                'updated_at' => Carbon::now()->subMinutes(155),
            ],
        ]);
            //Japanese calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => '別無工夫',
                'calligraphy_description' => 'by Musō Soseki (1275–1351, Japanese zen master, poet, and alligrapher.
                The characters "別無工夫" ("no spiritual meaning") are written in a flowing, connected sōsho style.',
                'style_id' => '5',
                'created_at' => Carbon::now()->subMinutes(154),
                'updated_at' => Carbon::now()->subMinutes(154),
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
                'created_at' => Carbon::now()->subMinutes(153),
                'updated_at' => Carbon::now()->subMinutes(153),
            ],
            [
                'calligraphy_name' => 'Yume',
                'calligraphy_description' => '"Yume" (夢) in Japanese calligraphy means "dream". The character is written
                with three strokes, starting with a horizontal stroke, followed by a vertical stroke, and ending with a
                curved stroke. Japanese calligraphy is a beautiful and expressive art form that is deeply rooted in
                Japanese culture and tradition, and it is often used to convey profound and inspirational messages.',
                'style_id' => '5',
                'created_at' => Carbon::now()->subMinutes(152),
                'updated_at' => Carbon::now()->subMinutes(152),
            ],
            [
                'calligraphy_name' => 'Dream',
                'calligraphy_description' => '"Dream" in Japanese calligraphy is written as "夢" which is pronounced as "yume".
                 It is a popular subject for Japanese calligraphy and often used to express the idea of aspirations, goals,
                 and wishes. The character consists of three strokes, with a horizontal stroke followed by a vertical
                 stroke and a final curve. Japanese calligraphy is a highly respected art form in Japan and is often
                 studied for its cultural and aesthetic value.',
                'style_id' => '5',
                'created_at' => Carbon::now()->subMinutes(151),
                'updated_at' => Carbon::now()->subMinutes(151),
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
                'created_at' => Carbon::now()->subMinutes(150),
                'updated_at' => Carbon::now()->subMinutes(150),
            ],
            [
                'calligraphy_name' => 'Monastery',
                'calligraphy_description' => 'Calligraphy in a Vulgate of AD 1407 on display in Malmesbury Abbey,
                 Wiltshire, England. The Bible was hand written in Belgium, by Gerard Brils, for reading aloud
                in a monastery.',
                'style_id' => '6',
                'created_at' => Carbon::now()->subMinutes(149),
                'updated_at' => Carbon::now()->subMinutes(149),
            ],
            [
                'calligraphy_name' => 'FJ Brechtel',
                'calligraphy_description' => 'In Western calligraphy, "FJ Brechtel" would be written using the Latin alphabet.
                The exact style and design of the letters would depend on the calligraphic style being used.
                For example, in Copperplate or Spencerian script, the letters would be highly ornate and flourished,
                while in a more modern or minimalist style, the letters may be simpler and more streamlined.
                However, in general, Western calligraphy emphasizes legibility, consistency, and balance in letterforms,
                and it often incorporates artistic flourishes and decorations as well.',
                'style_id' => '6',
                'created_at' => Carbon::now()->subMinutes(148),
                'updated_at' => Carbon::now()->subMinutes(148),
            ],
        ]);
            //Greek Calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "I always stand by your side",
                'calligraphy_description' => '"I always stand by your side" in Greek calligraphy can be written as
                "Πάντα στο πλευρό σου" (Pánta sto plefyró sou). In Greek calligraphy, each letter is carefully
                crafted to create a visually stunning and harmonious composition.
                The script is characterized by its fluid lines, decorative flourishes,
                and elegant curves. Its a beautiful script that has been used for centuries in religious texts,
                manuscripts, and inscriptions.',
                'style_id' => '7',
                'created_at' => Carbon::now()->subMinutes(147),
                'updated_at' => Carbon::now()->subMinutes(147),
            ],
            [
                'calligraphy_name' => 'Imazing',
                'calligraphy_description' => 'Imazing (which I assume means "amazing") in Greek calligraphy can be written
                as "καταπληκτικό" (katapliktikó). Greek calligraphy, also known as Byzantine calligraphy,
                has a rich history and is characterized by its highly decorative and ornate style.
                The Greek alphabet has 24 letters, each with its own distinct shape and form,
                making it a beautiful and unique script to work with.',
                'style_id' => '7',
                'created_at' => Carbon::now()->subMinutes(146),
                'updated_at' => Carbon::now()->subMinutes(146),
            ],
        ]);

        // Contemporary Calligraphy
            // Brush calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Experimental calligraphy",
                'calligraphy_description' => '',
                'style_id' => '8',
                'created_at' => Carbon::now()->subMinutes(145),
                'updated_at' => Carbon::now()->subMinutes(145),
            ],
            [
                'calligraphy_name' => "Love it catches you when you're not looking",
                'calligraphy_description' => '"Love, it catches you when you\'re not looking" is a poetic expression that
                means that love can come into your life unexpectedly, without any prior warning or conscious effort
                on your part. It suggests that love is not something that can be actively sought or pursued,
                but rather something that happens naturally and spontaneously. The phrase also implies that love has
                the power to surprise and delight us, and that its arrival can be a pleasant and unexpected experience.',
                'style_id' => '8',
                'created_at' => Carbon::now()->subMinutes(144),
                'updated_at' => Carbon::now()->subMinutes(144),
            ],
            [
                'calligraphy_name' => "Sometimes you win & sometimes you learn",
                'calligraphy_description' => 'The phrase "Sometimes you win and sometimes you learn" is a saying that
                suggests that even when you don\'t achieve your desired outcome, there is still an opportunity for growth and
                learning. Rather than seeing failure or disappointment as a negative experience,
                the phrase encourages individuals to view these situations as an opportunity to learn from their mistakes and
                improve themselves. It also implies that the process of learning and growth is ongoing, and that setbacks
                and obstacles are a natural part of the journey towards personal and professional development. In essence,
                the phrase emphasizes the importance of resilience and the ability to turn adversity into a positive experience.',
                'style_id' => '8',
                'created_at' => Carbon::now()->subMinutes(143),
                'updated_at' => Carbon::now()->subMinutes(143),
            ],
            [
                'calligraphy_name' => "We lightup the world",
                'calligraphy_description' => '"We light up the world" is a phrase that conveys a powerful message of positivity,
                hope, and inspiration. The phrase is often associated with ideas of progress, innovation, and creativity,
                and it encourages individuals to strive for excellence and make a positive impact in the world around them.
                In calligraphy, the phrase is typically written in a flowing, brush-style script that emphasizes the energy and
                movement of the words. The thick and thin strokes of the brush create a dynamic and expressive effect,
                adding depth and personality to the piece.',
                'style_id' => '8',
                'created_at' => Carbon::now()->subMinutes(142),
                'updated_at' => Carbon::now()->subMinutes(142),
            ],
            [
                'calligraphy_name' => "Pin on lettering",
                'calligraphy_description' => '"Pin on lettering" refers to a style of lettering that is often used in
                handcrafted or DIY projects, where individual letters or words are cut out of a material such
                as paper or fabric and then "pinned on" to a surface, such as a bulletin board or wall.
                This style of lettering is often associated with a rustic or vintage aesthetic, and is a popular
                choice for home decor, party decorations, and other creative projects. The letters are typically cut
                out by hand or with a die-cutting machine, and can be customized with different fonts, colors,
                and textures to create a unique and personalized look.',
                'style_id' => '8',
                'created_at' => Carbon::now()->subMinutes(141),
                'updated_at' => Carbon::now()->subMinutes(141),
            ],
            [
                'calligraphy_name' => "Guardian of galaxy",
                'calligraphy_description' => 'Guardians of the Galaxy is a superhero team from Marvel Comics that has
                gained popularity through comic books, movies, and television shows. The team is made up of various
                alien and human members who work together to protect the galaxy from threats, both internal and external.',
                'style_id' => '8',
                'created_at' => Carbon::now()->subMinutes(140),
                'updated_at' => Carbon::now()->subMinutes(140),
            ],
        ]);
            // Modern script
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Visually",
                'calligraphy_description' => '"Visually" in modern script could be written in a variety of ways,
                but typically it would involve a contemporary style of calligraphy that emphasizes legibility, clarity, and elegance.
                When writing "visually" in modern script, a calligrapher might use a pointed pen or brush to create
                thick and thin strokes, and add decorative touches such as swashes, loops, or serifs to enhance the visual
                appeal of the letters. The overall effect would be a sleek and sophisticated design that emphasizes the
                word\'s meaning and importance.',
                'style_id' => '9',
                'created_at' => Carbon::now()->subMinutes(139),
                'updated_at' => Carbon::now()->subMinutes(139),
            ],
            [
                'calligraphy_name' => "Bellany",
                'calligraphy_description' => '"Bellany" in modern script would be a beautiful and elegant representation of the name,
                suitable for use in various creative projects such as invitations, greeting cards, or branding materials.
                When writing "Bellany" in modern script, the calligrapher may choose to add decorative flourishes or
                serifs to the letters, giving them a unique and personalized touch. The overall effect would be a
                stylish and sophisticated design that emphasizes the name\'s beauty and importance.',
                'style_id' => '9',
                'created_at' => Carbon::now()->subMinutes(138),
                'updated_at' => Carbon::now()->subMinutes(138),
            ],
            [
                'calligraphy_name' => "Delightful",
                'calligraphy_description' => '"Delightful" in modern script would be a beautiful and stylish representation of the word,
                 perfect for use in a variety of creative projects such as branding, invitations, or greeting cards.',
                'style_id' => '9',
                'created_at' => Carbon::now()->subMinutes(137),
                'updated_at' => Carbon::now()->subMinutes(137),
            ],
        ]);
            //  Gothic calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Freedom",
                'calligraphy_description' => '"Freedom" in Gothic calligraphy would be a powerful and impactful
                representation of the word, perfect for use in projects that require a bold and dramatic style.
                Gothic calligraphy, also known as blackletter or Old English calligraphy, is a style of writing that
                originated in the Middle Ages and is characterized by its sharp, angular shapes and bold, heavy strokes.
                When writing "Freedom" in Gothic calligraphy, the calligrapher would use a pointed pen or a
                broad-edged pen to create the sharp and angular shapes of the letters. The overall effect would be a
                striking and bold design that emphasizes the word\'s meaning and strength.',
                'style_id' => '10',
                'created_at' => Carbon::now()->subMinutes(136),
                'updated_at' => Carbon::now()->subMinutes(136),
            ],
            [
                'calligraphy_name' => "Born to be free",
                'calligraphy_description' => '"Born to be free" is a short phrase in English that carries a powerful message.
                It means that every person has the innate right to be free, to live their life without being constrained
                or restricted by external forces.',
                'style_id' => '10',
                'created_at' => Carbon::now()->subMinutes(135),
                'updated_at' => Carbon::now()->subMinutes(135),
            ],
            [
                'calligraphy_name' => "Never give up",
                'calligraphy_description' => '"Never give up" is a short phrase in English that is often used as a motivational message.
                It means to persist and persevere in the face of challenges, and to not give up on one\'s goals and dreams.',
                'style_id' => '10',
                'created_at' => Carbon::now()->subMinutes(134),
                'updated_at' => Carbon::now()->subMinutes(134),
            ],
            [
                'calligraphy_name' => "You are the one",
                'calligraphy_description' => '"You are the one" is a phrase in English that typically conveys a strong sense of affection,
                admiration, or love towards another person. It suggests that the person being addressed is very
                special or significant to the speaker, and may even be their soulmate or the most important person in their life.',
                'style_id' => '10',
                'created_at' => Carbon::now()->subMinutes(133),
                'updated_at' => Carbon::now()->subMinutes(133),
            ],
        ]);
            //  Hand lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Hey jude",
                'calligraphy_description' => '"Hey Jude" is the title of a classic Beatles song, written by Paul McCartney and released in 1968.
                The song is known for its emotional lyrics and catchy melody, and has become a beloved classic of rock music.',
                'style_id' => '11',
                'created_at' => Carbon::now()->subMinutes(132),
                'updated_at' => Carbon::now()->subMinutes(132),
            ],
            [
                'calligraphy_name' => "Sasan Nasernia Ink Calligraphy, on Art Paper",
                'calligraphy_description' => 'Sasan Nasernia is an Iranian calligrapher who specializes in traditional Persian calligraphy,
                particularly the Nastaliq script. His work is known for its fluidity, elegance, and intricate details.',
                'style_id' => '11',
                'created_at' => Carbon::now()->subMinutes(131),
                'updated_at' => Carbon::now()->subMinutes(131),
            ],
            [
                'calligraphy_name' => "Sweet Calligraphy",
                'calligraphy_description' => '"Sweet" used to describe the lettering as playful, charming, or whimsical,
                while "Calligraphy" indicates that the lettering is based on a traditional or formal calligraphic script.',
                'style_id' => '11',
                'created_at' => Carbon::now()->subMinutes(130),
                'updated_at' => Carbon::now()->subMinutes(130),
            ],
            [
                'calligraphy_name' => "Give more than you receive",
                'calligraphy_description' => '"Give more than you receive" is an English phrase that emphasizes the importance of
                generosity and selflessness. It suggests that in order to lead a fulfilling and meaningful life,
                it is important to focus on giving and contributing to others, rather than solely on receiving and taking for oneself.',
                'style_id' => '11',
                'created_at' => Carbon::now()->subMinutes(129),
                'updated_at' => Carbon::now()->subMinutes(129),
            ],
        ]);
        //  Graffiti calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Alphabet",
                'calligraphy_description' => 'An alphabet is a collection of letters or symbols used to represent the sounds of a language. The English alphabet, for example, consists of 26 letters, ranging from A to Z.
                Each letter represents a unique sound or combination of sounds, which can be used to form words and sentences.',
                'style_id' => '12',
                'created_at' => Carbon::now()->subMinutes(128),
                'updated_at' => Carbon::now()->subMinutes(128),
            ],
            [
                'calligraphy_name' => "Warios",
                'calligraphy_description' => '',
                'style_id' => '12',
                'created_at' => Carbon::now()->subMinutes(127),
                'updated_at' => Carbon::now()->subMinutes(127),
            ],
            [
                'calligraphy_name' => "Calligraffiti",
                'calligraphy_description' => 'Calligraffiti is a contemporary art form that combines elements of traditional
                calligraphy with modern graffiti techniques. It involves using various tools such as markers, spray paint,
                and brushes to create elaborate lettering designs on walls, buildings, and other urban surfaces.
                Calligraffiti artists often blend different styles of calligraphy, such as Arabic, Chinese, or Japanese scripts,
                with graffiti lettering to create unique and dynamic compositions. The lettering can be highly stylized,
                abstract, or incorporate elements of illustration or graphic design.',
                'style_id' => '12',
                'created_at' => Carbon::now()->subMinutes(126),
                'updated_at' => Carbon::now()->subMinutes(126),
            ],
        ]);
        //  Experimental calligraphy
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "네이버 블로그",
                'calligraphy_description' => '인생이란 본시 어디에도 의탁할 곳이 없이 다만 하늘을 이고 땅을 밟은 채 떠도는 존재일 뿐이라는 사실을.',
                'style_id' => '13',
                'created_at' => Carbon::now()->subMinutes(125),
                'updated_at' => Carbon::now()->subMinutes(125),
            ],
            [
                'calligraphy_name' => "Alphabet",
                'calligraphy_description' => 'Experimental calligraphy is a broad term that encompasses a wide range of artistic
                styles and techniques. As such, an alphabet in experimental calligraphy might look very different depending on
                the artist\'s vision and approach.
                In general, experimental calligraphy involves breaking with traditional rules and conventions of calligraphy,
                and exploring new forms, materials, and methods of expression. This could involve experimenting with new tools,
                such as unconventional writing implements or digital technologies, or pushing the boundaries of traditional
                calligraphic scripts, such as by distorting or abstracting the shapes of letters.',
                'style_id' => '13',
                'created_at' => Carbon::now()->subMinutes(124),
                'updated_at' => Carbon::now()->subMinutes(124),
            ],
            [
                'calligraphy_name' => "Weisheit",
                'calligraphy_description' => '"Weisheit" is a German word that translates to "wisdom" in English.
                Wisdom is the ability to discern what is right and true, and to make sound judgments based on knowledge
                and experience. It involves a combination of cognitive and intuitive abilities, including critical thinking,
                empathy, and self-awareness.
                Wisdom is often associated with age and experience, but it can also be cultivated through deliberate practice and
                reflection. It is valued in many cultures and traditions as a guiding principle for living a meaningful and fulfilling life.
                In the context of German language and culture, "Weisheit" might refer to the wisdom of ancient philosophers,
                such as the Greek philosopher Aristotle, or to the practical wisdom of everyday life, such as the advice and
                guidance of parents and elders. The concept of "Weisheit" also has spiritual and philosophical dimensions,
                relating to the search for truth and the pursuit of ultimate meaning and purpose in life.',
                'style_id' => '13',
                'created_at' => Carbon::now()->subMinutes(123),
                'updated_at' => Carbon::now()->subMinutes(123),
            ],
        ]);

        // Hand-lettering & Design
            // 3D lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Aloha vibes",
                'calligraphy_description' => 'Aloha vibes in 3D lettering would be a visually striking and
                dynamic design that combines the Hawaiian spirit of "Aloha" with the three-dimensional depth
                and texture of 3D lettering.
                The word "Aloha" is a Hawaiian greeting and expression of love, peace, and gratitude,
                and is often associated with the laid-back, tropical lifestyle of Hawaii. 3D lettering, on the other hand,
                creates the illusion of depth and dimensionality, giving the design a sense of physical presence and vibrancy.
                In an Aloha vibes 3D lettering design, the letters might be bold and playful, with vibrant colors and
                tropical motifs such as palm trees or waves. The use of shadows and shading can help create the illusion
                of three-dimensional space, making the letters seem to pop off the page.',
                'style_id' => '14',
                'created_at' => Carbon::now()->subMinutes(122),
                'updated_at' => Carbon::now()->subMinutes(122),
            ],
            [
                'calligraphy_name' => "Art Schools",
                'calligraphy_description' => 'Art Schools in 3D lettering would be a striking and dynamic design that
                incorporates the three-dimensional depth and texture of 3D lettering to create a visually engaging
                composition that celebrates the creativity and passion of art schools.
                The design might feature the name of the school spelled out in bold, three-dimensional letters that are
                illuminated or set against a dramatic backdrop, such as an abstract rendering of an art studio or a vibrant
                splash of color. The use of shading and perspective can create the illusion of depth and space,
                making the letters appear to leap off the page.',
                'style_id' => '14',
                'created_at' => Carbon::now()->subMinutes(121),
                'updated_at' => Carbon::now()->subMinutes(121),
            ],
            [
                'calligraphy_name' => "Handlettering 3D style",
                'calligraphy_description' => 'Handlettering in 3D style is a visually striking design that incorporates
                the depth and dimensionality of 3D lettering into the artistic and organic forms of handlettering.
                The design might feature a word or phrase spelled out in bold, hand-drawn letters that are given depth
                and texture through the use of shading, perspective, and visual effects such as shadows or reflections.
                The hand-drawn quality of the lettering can create a sense of warmth and intimacy, while the 3D elements
                add a dynamic and contemporary feel.',
                'style_id' => '14',
                'created_at' => Carbon::now()->subMinutes(120),
                'updated_at' => Carbon::now()->subMinutes(120),
            ],
            [
                'calligraphy_name' => "Let your light shine",
                'calligraphy_description' => '"Let your light shine" is an inspirational phrase that encourages individuals
                to be confident, authentic, and true to themselves, and to share their unique gifts and talents with the world.
                In calligraphy or hand lettering, "Let your light shine" might be written in bold, flowing script or
                decorative lettering, with flourishes or embellishments that reflect the uplifting and empowering
                message of the phrase. The use of contrasting colors or textures, such as a gradient effect or metallic
                inks, can add further visual interest and depth to the design.
                The phrase might also be accompanied by other visual elements, such as an illustration of a shining
                light or a glowing sun, to further emphasize the idea of radiance and illumination. The use of shadows
                or other visual effects can help create a three-dimensional effect and enhance the sense of movement and energy.',
                'style_id' => '14',
                'created_at' => Carbon::now()->subMinutes(119),
                'updated_at' => Carbon::now()->subMinutes(119),
            ],
            [
                'calligraphy_name' => "South",
                'calligraphy_description' => '"South" is a simple but evocative word that can be interpreted in many ways
                in calligraphy or hand lettering.
                In a minimalist design, the word might be written in clean, bold lettering that emphasizes the stark
                simplicity of the word itself. The use of color or texture, such as a faded or distressed effect,
                can add a sense of age or history to the design.',
                'style_id' => '14',
                'created_at' => Carbon::now()->subMinutes(118),
                'updated_at' => Carbon::now()->subMinutes(118),
            ],
        ]);
            // Vintage lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "We have recorded everything in a book",
                'calligraphy_description' => '"We have recorded everything in a book" is a statement that can be portrayed
                in many ways in vintage lettering. Vintage lettering often has a classic, timeless look and feel,
                using techniques such as serifs, ornate flourishes, and distressed textures to create an aged or antique aesthetic.
                The use of vintage lettering techniques can also create a sense of history or nostalgia, emphasizing the
                idea that the information being recorded is significant and worthy of preservation. Distressed textures,
                such as faded or yellowed paper, can add a sense of age and authenticity to the design, suggesting that the
                information being recorded has been accumulated over time.',
                'style_id' => '15',
                'created_at' => Carbon::now()->subMinutes(117),
                'updated_at' => Carbon::now()->subMinutes(117),
            ],
            [
                'calligraphy_name' => "Salida wine fest",
                'calligraphy_description' => '"Salida Wine Fest" in vintage lettering might feature classic,
                timeless elements such as serifs, distressed textures, and ornate flourishes that create an aged or antique look and feel.
                The phrase might be written in a script or cursive style, with flowing, elegant lettering that suggests the
                refinement and sophistication of the wines being celebrated. The use of serifs, ligatures, and other decorative
                elements can add a sense of history and authenticity to the design, emphasizing the idea that wine has been
                enjoyed for centuries and is a timeless symbol of culture and refinement.',
                'style_id' => '15',
                'created_at' => Carbon::now()->subMinutes(116),
                'updated_at' => Carbon::now()->subMinutes(116),
            ],
            [
                'calligraphy_name' => "Roll with it & gain momentum",
                'calligraphy_description' => '"Roll with it & gain momentum" in vintage lettering might feature classic,
                timeless elements such as serifs, distressed textures, and ornate flourishes that create an aged or antique look and feel.',
                'style_id' => '15',
                'created_at' => Carbon::now()->subMinutes(115),
                'updated_at' => Carbon::now()->subMinutes(115),
            ],
            [
                'calligraphy_name' => "Autumn and spring",
                'calligraphy_description' => '"Autumn" and "spring" are two seasons in English.
                Autumn is the season that comes after summer and before winter. It is also known as fall, as this is the time of
                year when leaves on trees change color and fall to the ground. The weather during autumn is typically cooler
                than in summer, but still relatively mild. In many parts of the world, autumn is associated with harvest time,
                and it is a popular season for outdoor activities such as hiking, apple-picking, and pumpkin-carving.
                Spring is the season that comes after winter and before summer. It is a time of year when plants and trees
                begin to bloom and the weather starts to warm up. Spring is often associated with new beginnings, as it is a
                time of year when people start to emerge from the indoor hibernation of winter and engage in outdoor activities.
                In many cultures, spring is also associated with religious holidays such as Easter and Passover.',
                'style_id' => '15',
                'created_at' => Carbon::now()->subMinutes(114),
                'updated_at' => Carbon::now()->subMinutes(114),
            ],
            [
                'calligraphy_name' => "Work hard so you can shop harder",
                'calligraphy_description' => 'The phrase "Work hard so you can shop harder" is often used in a humorous
                or tongue-in-cheek way to suggest that people should work hard in order to earn money to spend on shopping or other leisure activities.
                From a design perspective, this phrase might be written in bold, playful lettering that emphasizes the
                humor and lightheartedness of the message. The use of contrasting colors, bold outlines, or other visual
                effects can help create a dynamic and attention-grabbing design that effectively communicates the fun and irreverent tone of the message.',
                'style_id' => '15',
                'created_at' => Carbon::now()->subMinutes(113),
                'updated_at' => Carbon::now()->subMinutes(113),
            ],
            [
                'calligraphy_name' => "Coffee Tin Signs",
                'calligraphy_description' => 'Coffee tin signs are a popular type of vintage signage that feature coffee-related imagery and messages.
                These signs are often made of metal and are designed to look weathered and aged, giving them a nostalgic and rustic feel.',
                'style_id' => '15',
                'created_at' => Carbon::now()->subMinutes(112),
                'updated_at' => Carbon::now()->subMinutes(112),
            ],
            [
                'calligraphy_name' => "I’m in love",
                'calligraphy_description' => '"I\'m in love" is a simple yet powerful statement that expresses a feeling
                of strong affection or attachment towards someone or something. It can refer to romantic love, platonic
                love, or even a love for an activity, hobby, or place.',
                'style_id' => '15',
                'created_at' => Carbon::now()->subMinutes(111),
                'updated_at' => Carbon::now()->subMinutes(111),
            ],
        ]);
            // Modern lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Just visit this plane ",
                'calligraphy_description' => '"Just visit this place" is a simple statement that can be expressed in a variety of
                ways using modern lettering. From a design perspective, the phrase might be written in sleek,
                minimalist lettering that conveys a sense of sophistication and elegance. The use of clean,
                straight lines and a monochromatic color scheme can help create a sense of modernity and simplicity.',
                'style_id' => '16',
                'created_at' => Carbon::now()->subMinutes(110),
                'updated_at' => Carbon::now()->subMinutes(110),
            ],
            [
                'calligraphy_name' => "Clubnotes",
                'calligraphy_description' => '"Clubnotes" could refer to various things, such as a music event, a nightclub, or a newsletter for a club or organization.',
                'style_id' => '16',
                'created_at' => Carbon::now()->subMinutes(109),
                'updated_at' => Carbon::now()->subMinutes(109),
            ],
            [
                'calligraphy_name' => "Tiếng nói của vạn vật",
                'calligraphy_description' => '"Tiếng nói của vạn vật" is a Vietnamese phrase that can be translated to "
                the voice of all things" in English. It is a poetic expression that suggests that every object,
                living or non-living, has its own unique voice or energy that contributes to the greater harmony of the universe.',
                'style_id' => '16',
                'created_at' => Carbon::now()->subMinutes(109),
                'updated_at' => Carbon::now()->subMinutes(109),
            ],
            [
                'calligraphy_name' => "Tràng Giang",
                'calligraphy_description' => '"Tràng Giang" is a Vietnamese term that refers to the River Market,
                a floating market located on the Mekong Delta in southern Vietnam. The market is a bustling hub of activity,
                with vendors selling a wide variety of goods from boats on the river.',
                'style_id' => '16',
                'created_at' => Carbon::now()->subMinutes(108),
                'updated_at' => Carbon::now()->subMinutes(108),
            ],
            [
                'calligraphy_name' => "Người lái đò sông đà",
                'calligraphy_description' => 'In literature, "Người lái đò sông Đà" might be used as a metaphor to symbolize a person who
                navigates through the challenges and complexities of life. The boatman represents a resilient and skilled individual
                who is able to overcome obstacles and guide themselves and others to safety.
                This metaphor could be explored in various literary genres, such as poetry, fiction, and memoirs. For example,
                a poem could describe the boatman\'s journey down the river as a metaphor for the human experience of navigating through the
                ups and downs of life. A novel could feature a character who is a boatman on the Da River, using their experiences
                and interactions with others to explore themes of resilience, adaptability, and perseverance. A memoir could be written
                by a real-life boatman, detailing their experiences and insights gained from a lifetime of navigating the river.',
                'style_id' => '16',
                'created_at' => Carbon::now()->subMinutes(107),
                'updated_at' => Carbon::now()->subMinutes(107),
            ],
            [
                'calligraphy_name' => "Rừng xà nu",
                'calligraphy_description' => 'In Vietnamese literature, "Rừng xà nu" might be used as a symbol to represent the
                beauty and richness of the natural environment, as well as the cultural traditions and history of the ethnic minority groups who live in the region.
                In poetry, "Rừng xà nu" could be used as a metaphor to explore themes such as freedom, isolation, and the power of nature.
                The forest might be depicted as a place of refuge or escape, or as a source of inspiration for artists and poets.',
                'style_id' => '16',
                'created_at' => Carbon::now()->subMinutes(106),
                'updated_at' => Carbon::now()->subMinutes(106),
            ],
            [
                'calligraphy_name' => "Chuyện người con gái nam xương",
                'calligraphy_description' => '"Chuyện người con gái nam xương" is a novel by the Vietnamese author Đoàn Giỏi, first published in 1936.
                The novel tells the story of a young woman named Nam Xương who disguises herself as a man in order to take care of her
                sick father and work as a boatman on the river. The novel explores themes of gender identity, social norms, and the struggle for
                survival in a difficult time and place.
                In Vietnamese literature, "Chuyện người con gái nam xương" is considered a classic work that helped to pave the way for modern Vietnamese literature.
                The novel is noted for its vivid descriptions of the natural environment and the riverine way of life, as well as its
                sympathetic portrayal of the struggles and aspirations of working-class people.
                The character of Nam Xương has become an enduring symbol of female strength and resilience in Vietnamese culture,
                and the novel continues to be read and studied in Vietnam today.',
                'style_id' => '16',
                'created_at' => Carbon::now()->subMinutes(105),
                'updated_at' => Carbon::now()->subMinutes(105),
            ],
            [
                'calligraphy_name' => "Vào phủ chúa trịnh",
                'calligraphy_description' => '"Vào phủ chúa Trịnh" (Entering the Trịnh Lord\'s Palace) is a Vietnamese classical opera play
                (called "tuồng" in Vietnamese) that has been performed for many centuries. The play is set in the feudal period of
                Vietnam and centers around the rivalry between the Trịnh and Nguyễn Lords, who were powerful families that held
                control over different parts of Vietnam at the time.',
                'style_id' => '16',
                'created_at' => Carbon::now()->subMinutes(104),
                'updated_at' => Carbon::now()->subMinutes(104),
            ],
            [
                'calligraphy_name' => "Hoàng lê nhất thống chí",
                'calligraphy_description' => '"Hoàng Lê Nhất Thống Chí" is a historical document written in classical Chinese that
                chronicles the history of the Lê Dynasty of Vietnam. The Lê Dynasty ruled Vietnam from 1428 to 1788, and the
                "Hoàng Lê Nhất Thống Chí" covers the period from the founding of the dynasty until the mid-16th century.',
                'style_id' => '16',
                'created_at' => Carbon::now()->subMinutes(103),
                'updated_at' => Carbon::now()->subMinutes(103),
            ],
            [
                'calligraphy_name' => "September",
                'calligraphy_description' => 'September is the ninth month of the Gregorian calendar and has 30 days.
                The name September comes from the Latin word "septem," which means "seven," as it was originally the seventh
                month in the ancient Roman calendar before January and February were added.
                In the Northern Hemisphere, September marks the beginning of the fall or autumn season, while in the Southern Hemisphere,
                it is the start of spring. September is also known for the equinox, which occurs around September 22nd or 23rd,
                and marks the official start of autumn in the Northern Hemisphere and spring in the Southern Hemisphere.',
                'style_id' => '16',
                'created_at' => Carbon::now()->subMinutes(102),
                'updated_at' => Carbon::now()->subMinutes(102),
            ],
        ]);
            // Illustrated lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "R letter",
                'calligraphy_description' => 'R letter in Illustrated lettering',
                'style_id' => '17',
                'created_at' => Carbon::now()->subMinutes(101),
                'updated_at' => Carbon::now()->subMinutes(101),
            ],
            [
                'calligraphy_name' => "S letter",
                'calligraphy_description' => 'S letter in Illustrated lettering',
                'style_id' => '17',
                'created_at' => Carbon::now()->subMinutes(100),
                'updated_at' => Carbon::now()->subMinutes(100),
            ],
            [
                'calligraphy_name' => "Summer",
                'calligraphy_description' => 'Summer is a season that typically occurs between late May and early September
                in the Northern Hemisphere, and between late November and early March in the Southern Hemisphere.
                It is the warmest season of the year, characterized by longer days and shorter nights,
                higher temperatures, and a more vibrant natural environment.',
                'style_id' => '17',
                'created_at' => Carbon::now()->subMinutes(99),
                'updated_at' => Carbon::now()->subMinutes(99),
            ],
            [
                'calligraphy_name' => "Summver Vacation",
                'calligraphy_description' => 'Summer vacation is a period of time during the summer season when schools
                and universities are closed and students and teachers have a break from their regular academic schedules.
                In the United States, summer vacation typically lasts for 2-3 months, starting in late May or early
                June and ending in August or early September.',
                'style_id' => '17',
                'created_at' => Carbon::now()->subMinutes(98),
                'updated_at' => Carbon::now()->subMinutes(98),
            ],
            [
                'calligraphy_name' => "The World",
                'calligraphy_description' => 'The world is a term commonly used to refer to the planet Earth and all of its inhabitants.
                It is a complex and diverse place, with a wide variety of cultures, languages, religions, and ecosystems.',
                'style_id' => '17',
                'created_at' => Carbon::now()->subMinutes(97),
                'updated_at' => Carbon::now()->subMinutes(97),
            ],
        ]);
            // Brush lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Pink",
                'calligraphy_description' => 'The word "Pink" in brush lettering can be created using thick and thin strokes with a brush pen or paintbrush.
                The letters can be slightly slanted or curved to create a flowing and dynamic look. The word can be filled in
                with a solid pink color or a gradient effect, with lighter shades of pink towards the top of the
                letters and darker shades towards the bottom. Some artists may also add small decorative elements,
                such as floral or swirl designs, to enhance the overall look of the word.',
                'style_id' => '18',
                'created_at' => Carbon::now()->subMinutes(96),
                'updated_at' => Carbon::now()->subMinutes(96),
            ],
            [
                'calligraphy_name' => "Back in black",
                'calligraphy_description' => 'The phrase "Back in Black" in brush lettering can be created using thick and bold strokes with
                a brush pen or paintbrush. The letters can be slightly angled or curved to create a sense of movement and energy.
                The word "Back" can be written in a slightly smaller size compared to "in Black", and the letters in "Black"
                can be filled in with solid black ink or paint. The overall effect is a bold and powerful design that conveys a sense of confidence and strength.',
                'style_id' => '18',
                'created_at' => Carbon::now()->subMinutes(95),
                'updated_at' => Carbon::now()->subMinutes(95),
            ],
            [
                'calligraphy_name' => "I have found the one whom my soul loves",
                'calligraphy_description' => 'The phrase "I have found the one whom my soul loves" is a quote from the biblical
                book Song of Solomon (also known as Song of Songs). It expresses a deep and passionate love between two individuals,
                where one person has found their soulmate and expresses their love for them. The phrase can be interpreted as a
                celebration of the love that exists between two people who are truly meant to be together. It is often used as a
                romantic quote in weddings, anniversaries, or other occasions where love is celebrated.',
                'style_id' => '18',
                'created_at' => Carbon::now()->subMinutes(94),
                'updated_at' => Carbon::now()->subMinutes(94),
            ],
            [
                'calligraphy_name' => "Brave",
                'calligraphy_description' => 'The word "Brave" means to be courageous, strong, and fearless in the face of danger or difficulty.
                It can refer to a person who shows bravery or courage in challenging situations, or to an action that requires courage and determination.
                Being brave is often associated with taking risks, standing up for what you believe in, and facing your fears.
                It can also mean having the mental and emotional strength to overcome adversity and achieve your goals, despite
                obstacles or setbacks. In general, being brave is seen as a positive and admirable trait, and is often celebrated in literature, art, and popular culture.',
                'style_id' => '18',
                'created_at' => Carbon::now()->subMinutes(93),
                'updated_at' => Carbon::now()->subMinutes(93),
            ],
            [
                'calligraphy_name' => "Hold back the river let me look in your eyes",
                'calligraphy_description' => '"Hold back the river let me look in your eyes" is a phrase from a popular song by James Bay called "Hold Back the River".
                The meaning of this phrase in the context of the song is that the singer is asking his lover to let him see her true
                emotions and feelings by holding back her tears or emotions. The river in this case can be seen as a metaphor for
                the overwhelming emotions that can sometimes flood a person\'s heart and mind. By holding back the river, the singer is asking his lover
                to let him in and see her vulnerability, so that he can better understand her and be there for her. Overall,
                the phrase expresses a desire for emotional intimacy and connection between two people.',
                'style_id' => '18',
                'created_at' => Carbon::now()->subMinutes(92),
                'updated_at' => Carbon::now()->subMinutes(92),
            ],
            [
                'calligraphy_name' => "Smells like mint",
                'calligraphy_description' => '"Smells like mint" is a phrase that simply describes a scent similar to that of mint.
                Mint has a cool and refreshing aroma that is often associated with cleanliness, freshness, and relaxation.
                Therefore, when someone says "smells like mint", it may suggest that there is a refreshing or invigorating scent in the air, similar to that of mint.',
                'style_id' => '18',
                'created_at' => Carbon::now()->subMinutes(91),
                'updated_at' => Carbon::now()->subMinutes(91),
            ],
            [
                'calligraphy_name' => "Never forget who you are",
                'calligraphy_description' => 'The phrase "Never forget who you are" means to always remember your true identity, values, and beliefs,
                regardless of what is happening around you or what others may say or do. It is a reminder to stay true to yourself
                and not to compromise your integrity or authenticity for anyone or anything. It emphasizes the importance of self-awareness,
                self-acceptance, and self-respect, as well as the need to maintain a strong sense of identity and purpose in life.
                This phrase encourages people to stay grounded and true to their principles, even in difficult times.',
                'style_id' => '18',
                'created_at' => Carbon::now()->subMinutes(90),
                'updated_at' => Carbon::now()->subMinutes(90),
            ],
            [
                'calligraphy_name' => "Slow progress is better than no progress",
                'calligraphy_description' => 'The phrase "slow progress is better than no progress" means that even if
                you are moving forward at a slow pace, it is still better than not making any progress at all.
                This phrase encourages people to keep moving forward, even if the progress is small, because every
                little step counts and can eventually lead to achieving their goals. It emphasizes the importance of
                consistency, patience, and perseverance, and encourages people to not give up on their dreams just
                because they are not making progress as quickly as they would like. This phrase reminds us that progress,
                no matter how small, is still progress, and that it is better to keep moving forward than to give up completely.',
                'style_id' => '18',
                'created_at' => Carbon::now()->subMinutes(89),
                'updated_at' => Carbon::now()->subMinutes(89),
            ],
        ]);
            // Calligraphic lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "It always seem impossible until it's done",
                'calligraphy_description' => 'This quote is attributed to Nelson Mandela, and it means that when faced with a
                daunting task or goal, it can seem overwhelming and impossible. However, with perseverance and determination, even the most
                difficult things can be achieved. It encourages people to keep pushing themselves and not give up, even when the task seems impossible.',
                'style_id' => '19',
                'created_at' => Carbon::now()->subMinutes(88),
                'updated_at' => Carbon::now()->subMinutes(88),
            ],
            [
                'calligraphy_name' => "Don’t give up",
                'calligraphy_description' => '"Don\'t give up" is a simple yet powerful phrase that encourages someone
                to keep going despite difficulties, challenges, or setbacks they may face. It means to persevere, keep pushing forward
                and not give in to feelings of defeat or hopelessness. The phrase is often used as a source of motivation or inspiration
                to help people stay focused on their goals and to keep striving towards success.',
                'style_id' => '19',
                'created_at' => Carbon::now()->subMinutes(87),
                'updated_at' => Carbon::now()->subMinutes(87),
            ],
            [
                'calligraphy_name' => "Get better, don’t try to be just good",
                'calligraphy_description' => '"Get better, don’t try to be just good" is an inspiring quote that encourages continuous improvement.
                It suggests that instead of being satisfied with just being good at something, we should strive to get better every day.
                This mindset of constantly seeking growth and development can lead to great achievements and success. It also implies that we
                should not settle for mediocrity and should always aim to exceed our own expectations. By consistently pushing ourselves to improve,
                we can reach our full potential and become the best version of ourselves.',
                'style_id' => '19',
                'created_at' => Carbon::now()->subMinutes(86),
                'updated_at' => Carbon::now()->subMinutes(86),
            ],
            [
                'calligraphy_name' => "Happy",
                'calligraphy_description' => 'Happy refers to a feeling of pleasure, contentment, or joy. It is a positive emotion that is typically accompanied by a sense of well-being, satisfaction, and optimism. Happiness can be experienced in many different ways, such as through meaningful relationships, fulfilling work, hobbies, travel, and other experiences that bring joy and satisfaction to our lives.',
                'style_id' => '19',
                'created_at' => Carbon::now()->subMinutes(85),
                'updated_at' => Carbon::now()->subMinutes(85),
            ],
            [
                'calligraphy_name' => "Be friendly",
                'calligraphy_description' => 'Being friendly means to behave in a kind, welcoming, and sociable way towards others. It involves showing genuine interest, concern, and empathy towards people, and treating them with respect and consideration. Being friendly helps to create a positive environment and fosters good relationships with others. It can also lead to new friendships and opportunities.',
                'style_id' => '19',
                'created_at' => Carbon::now()->subMinutes(84),
                'updated_at' => Carbon::now()->subMinutes(84),
            ],
            [
                'calligraphy_name' => "Live your life joyfully",
                'calligraphy_description' => 'Living your life joyfully means embracing happiness and finding joy in everyday experiences. It means having a positive outlook on life and focusing on the good things, even in challenging situations. It involves pursuing your passions and doing things that make you happy, while also being kind to others and spreading joy to those around you. Ultimately, living your life joyfully is about finding contentment and fulfillment in every moment, and making the most of the time you have.',
                'style_id' => '19',
                'created_at' => Carbon::now()->subMinutes(83),
                'updated_at' => Carbon::now()->subMinutes(83),
            ],
            [
                'calligraphy_name' => "Happiness never grow olds",
                'calligraphy_description' => 'The correct phrase is "Happiness never grows old." This means that happiness is timeless and eternal, and that it does not diminish with age or time. It suggests that happiness is something that can be experienced at any stage of life, and that it is not limited by external factors such as age, wealth, or status.',
                'style_id' => '19',
                'created_at' => Carbon::now()->subMinutes(82),
                'updated_at' => Carbon::now()->subMinutes(82),
            ],
            [
                'calligraphy_name' => "Hey you’re so great",
                'calligraphy_description' => 'Hey, you\'re so great is an expression of admiration or compliment towards someone. It could be used to acknowledge someone\'s talents, abilities, or personality traits that one finds impressive or admirable. It is a positive and encouraging statement that can help boost someone\'s confidence and self-esteem.',
                'style_id' => '19',
                'created_at' => Carbon::now()->subMinutes(81),
                'updated_at' => Carbon::now()->subMinutes(81),
            ],
            [
                'calligraphy_name' => "Make - Love - Give",
                'calligraphy_description' => '"Make - Love - Give" is a phrase that encourages individuals to engage in creative and loving pursuits while
                also being generous and giving to others. It promotes the idea of using one\'s talents and passions to make a positive
                impact on the world and to spread love and kindness to others through acts of giving.',
                'style_id' => '19',
                'created_at' => Carbon::now()->subMinutes(80),
                'updated_at' => Carbon::now()->subMinutes(80),
            ],
        ]);

        // Modern Calligraphy
            // Copperplate
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Make things happen",
                'calligraphy_description' => '"Make things happen" is a motivational phrase that encourages people to take
                action and work towards achieving their goals. It implies that success doesn\'t come to those who wait, but to those who actively
                pursue their dreams and make things happen through hard work, dedication, and perseverance.',
                'style_id' => '20',
                'created_at' => Carbon::now()->subMinutes(79),
                'updated_at' => Carbon::now()->subMinutes(79),
            ],
            [
                'calligraphy_name' => "Make more lime",
                'calligraphy_description' => '',
                'style_id' => '20',
                'created_at' => Carbon::now()->subMinutes(78),
                'updated_at' => Carbon::now()->subMinutes(78),
            ],
            [
                'calligraphy_name' => "Problem are not stop signs they are guidelines",
                'calligraphy_description' => '',
                'style_id' => '20',
                'created_at' => Carbon::now()->subMinutes(77),
                'updated_at' => Carbon::now()->subMinutes(77),
            ],
        ]);
            // Chalkboard Art
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Do more of what makes you happy",
                'calligraphy_description' => '',
                'style_id' => '21',
                'created_at' => Carbon::now()->subMinutes(76),
                'updated_at' => Carbon::now()->subMinutes(76),
            ],
            [
                'calligraphy_name' => "Nothing great ever came that easy",
                'calligraphy_description' => '',
                'style_id' => '21',
                'created_at' => Carbon::now()->subMinutes(75),
                'updated_at' => Carbon::now()->subMinutes(75),
            ],
            [
                'calligraphy_name' => "Happy fall y’all",
                'calligraphy_description' => '',
                'style_id' => '21',
                'created_at' => Carbon::now()->subMinutes(74),
                'updated_at' => Carbon::now()->subMinutes(74),
            ],
            [
                'calligraphy_name' => "It is never too late",
                'calligraphy_description' => '',
                'style_id' => '21',
                'created_at' => Carbon::now()->subMinutes(73),
                'updated_at' => Carbon::now()->subMinutes(73),
            ],
            [
                'calligraphy_name' => "Enjoy the little things",
                'calligraphy_description' => '',
                'style_id' => '21',
                'created_at' => Carbon::now()->subMinutes(72),
                'updated_at' => Carbon::now()->subMinutes(72),
            ],
            [
                'calligraphy_name' => "Make today ridiculously amazing",
                'calligraphy_description' => '',
                'style_id' => '21',
                'created_at' => Carbon::now()->subMinutes(70),
                'updated_at' => Carbon::now()->subMinutes(70),
            ],
        ]);
            // Blackletter
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "D letter",
                'calligraphy_description' => '',
                'style_id' => '22',
                'created_at' => Carbon::now()->subMinutes(69),
                'updated_at' => Carbon::now()->subMinutes(69),
            ],
            [
                'calligraphy_name' => "C letter",
                'calligraphy_description' => '',
                'style_id' => '22',
                'created_at' => Carbon::now()->subMinutes(68),
                'updated_at' => Carbon::now()->subMinutes(68),
            ],
            [
                'calligraphy_name' => "Color blended circular calligram",
                'calligraphy_description' => '',
                'style_id' => '22',
                'created_at' => Carbon::now()->subMinutes(67),
                'updated_at' => Carbon::now()->subMinutes(67),
            ],
            [
                'calligraphy_name' => "Blackletter alphabet by luca barcellona",
                'calligraphy_description' => '',
                'style_id' => '22',
                'created_at' => Carbon::now()->subMinutes(66),
                'updated_at' => Carbon::now()->subMinutes(66),
            ],
            [
                'calligraphy_name' => "I’ll sleep when i’m dead",
                'calligraphy_description' => '',
                'style_id' => '22',
                'created_at' => Carbon::now()->subMinutes(65),
                'updated_at' => Carbon::now()->subMinutes(65),
            ],
            [
                'calligraphy_name' => "You’ll never walk alone",
                'calligraphy_description' => '',
                'style_id' => '22',
                'created_at' => Carbon::now()->subMinutes(64),
                'updated_at' => Carbon::now()->subMinutes(64),
            ],
            [
                'calligraphy_name' => "Awesome letter",
                'calligraphy_description' => '',
                'style_id' => '22',
                'created_at' => Carbon::now()->subMinutes(63),
                'updated_at' => Carbon::now()->subMinutes(63),
            ],
            [
                'calligraphy_name' => "Hope is the fuel of progress",
                'calligraphy_description' => '',
                'style_id' => '22',
                'created_at' => Carbon::now()->subMinutes(62),
                'updated_at' => Carbon::now()->subMinutes(62),
            ],
            [
                'calligraphy_name' => "In the beginning was the word",
                'calligraphy_description' => '',
                'style_id' => '22',
                'created_at' => Carbon::now()->subMinutes(61),
                'updated_at' => Carbon::now()->subMinutes(61),
            ],
            [
                'calligraphy_name' => "100 years of the coca-cola contour bottle",
                'calligraphy_description' => '',
                'style_id' => '22',
                'created_at' => Carbon::now()->subMinutes(60),
                'updated_at' => Carbon::now()->subMinutes(60),
            ],
        ]);
            // Watercolor lettering
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Live every moment",
                'calligraphy_description' => '',
                'style_id' => '23',
                'created_at' => Carbon::now()->subMinutes(59),
                'updated_at' => Carbon::now()->subMinutes(59),
            ],
            [
                'calligraphy_name' => "Done is better than perfect",
                'calligraphy_description' => '',
                'style_id' => '23',
                'created_at' => Carbon::now()->subMinutes(58),
                'updated_at' => Carbon::now()->subMinutes(58),
            ],
            [
                'calligraphy_name' => "Start each day with a grateful heart",
                'calligraphy_description' => '',
                'style_id' => '23',
                'created_at' => Carbon::now()->subMinutes(57),
                'updated_at' => Carbon::now()->subMinutes(57),
            ],
            [
                'calligraphy_name' => "Stay positive",
                'calligraphy_description' => '',
                'style_id' => '23',
                'created_at' => Carbon::now()->subMinutes(56),
                'updated_at' => Carbon::now()->subMinutes(56),
            ],
            [
                'calligraphy_name' => "My heart sleeps by the ocean",
                'calligraphy_description' => '',
                'style_id' => '23',
                'created_at' => Carbon::now()->subMinutes(55),
                'updated_at' => Carbon::now()->subMinutes(55),
            ],
            [
                'calligraphy_name' => "You have my whole heart for my whole life",
                'calligraphy_description' => '',
                'style_id' => '23',
                'created_at' => Carbon::now()->subMinutes(54),
                'updated_at' => Carbon::now()->subMinutes(54),
            ],
            [
                'calligraphy_name' => "Do it all with love",
                'calligraphy_description' => '',
                'style_id' => '23',
                'created_at' => Carbon::now()->subMinutes(53),
                'updated_at' => Carbon::now()->subMinutes(53),
            ],
        ]);
            // Modern script
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Shrine like the stars",
                'calligraphy_description' => '',
                'style_id' => '24',
                'created_at' => Carbon::now()->subMinutes(52),
                'updated_at' => Carbon::now()->subMinutes(52),
            ],
            [
                'calligraphy_name' => "Bloom",
                'calligraphy_description' => '',
                'style_id' => '24',
                'created_at' => Carbon::now()->subMinutes(51),
                'updated_at' => Carbon::now()->subMinutes(51),
            ],
            [
                'calligraphy_name' => "Take time for yourself",
                'calligraphy_description' => '',
                'style_id' => '24',
                'created_at' => Carbon::now()->subMinutes(50),
                'updated_at' => Carbon::now()->subMinutes(50),
            ],
        ]);
            // Gothic script
        Calligraphy::factory()->createMany([
            [
                'calligraphy_name' => "Alphabet",
                'calligraphy_description' => '',
                'style_id' => '25',
                'created_at' => Carbon::now()->subMinutes(49),
                'updated_at' => Carbon::now()->subMinutes(49),
            ],
            [
                'calligraphy_name' => "Alphabet",
                'calligraphy_description' => '',
                'style_id' => '25',
                'created_at' => Carbon::now()->subMinutes(49),
                'updated_at' => Carbon::now()->subMinutes(49),
            ],
            [
                'calligraphy_name' => "Alphabet",
                'calligraphy_description' => '',
                'style_id' => '25',
                'created_at' => Carbon::now()->subMinutes(48),
                'updated_at' => Carbon::now()->subMinutes(48),
            ],
            [
                'calligraphy_name' => "Gothic calligraphy",
                'calligraphy_description' => '',
                'style_id' => '25',
                'created_at' => Carbon::now()->subMinutes(47),
                'updated_at' => Carbon::now()->subMinutes(47),
            ],
        ]);
    }
}
