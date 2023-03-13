<?php

namespace Database\Seeders;

use App\Models\CalligraphyCategory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        CalligraphyCategory::factory()->createMany([
            [
                'category_id' => 1,
                'category_name' => 'Traditional Calligraphy',
                'category_image' => 'uploads/cateImages/c404d7ec7a9bf48f56b0a7ba7d6c42c0.jpg',
                'category_description' => '<p>
                        <b>Traditional calligraphy</b> is the art of beautiful writing by hand, often using special pens or brushes and ink.
                        It is an ancient art form that has been practiced for thousands of years in various cultures around the world,
                        including China, Japan, Korea, and many Islamic countries.
                    </p>
                    <p>
                        In <b>traditional calligraphy</b>, the focus is on the visual appearance of the written letters and words,
                        rather than on their meaning. Calligraphers use various techniques to create visually appealing lettering styles,
                        such as varying the width of the strokes, adjusting the spacing between letters and words,
                        and using decorative flourishes.
                    </p>
                    <p>
                        In some cultures, calligraphy has been used for religious or ceremonial purposes,
                        such as in the writing of religious texts, creating official documents,
                        or as a form of meditation or spiritual practice.
                        Today, <b>traditional calligraphy</b> is still practiced as a form of art and a way to preserve cultural traditions.
                    </p>',
            ],
            [
                'category_id' => 2,
                'category_name' => 'Contemporary Calligraphy',
                'category_image' => 'uploads/cateImages/4dec201059f0f7ae894a189453a9f2e9.jpg',
                'category_description' => '<p>
                            <b>Contemporary calligraphy</b> is a modern interpretation of traditional calligraphy that
                            incorporates new techniques, materials, and styles. While traditional calligraphy emphasizes adherence
                            to established rules and forms, <b>contemporary calligraphy</b> is more experimental and often allows for more
                            creative expression.
                        </p>
                        <p>
                            <b>Contemporary calligraphy</b> can take many forms, ranging from experimental calligraphy
                            that pushes the boundaries of the art form, to more commercial calligraphy used for graphic design,
                            branding, and marketing. Contemporary calligraphers may use a range of tools and media, such as
                            digital tools, watercolors, and mixed media, to create their work.
                        </p>
                        <p>
                            One of the key features of <b>contemporary calligraphy</b> is the incorporation of modern design elements
                            and aesthetics. This can include the use of bold colors, graphic patterns, and abstract shapes,
                            as well as the integration of calligraphy into other forms of design, such as typography, illustration,
                            and branding.
                        </p>
                        <p>
                            <b>Contemporary calligraphy</b> is a constantly evolving art form, with new styles and techniques
                            emerging all the time. Some contemporary calligraphers are also pushing the boundaries of the art
                            form by incorporating technology and new media, such as using laser cutters to create intricate
                            calligraphy designs, or experimenting with interactive calligraphy installations.
                        </p>
                        <p>
                            In summary, <b>contemporary calligraphy</b> is a modern interpretation of traditional calligraphy
                            that embraces new techniques, materials, and styles, and allows for more creative expression and
                            experimentation.
                        </p>',
            ],
            [
                'category_id' => 3,
                'category_name' => 'Hand-lettering & Design',
                'category_image' => 'uploads/cateImages/02ba2ff95c6a235a5ed1547fcf9562e6.jpg',
                'category_description' => '<p>
                        <b>Hand-lettering and design</b> is a type of visual art that combines hand-drawn lettering and
                        design elements to create a unique and cohesive visual message. Unlike traditional calligraphy,
                        which is focused on creating stylized writing using a particular script, hand-lettering is all
                        about creating letterforms that are uniquely designed for a specific purpose or message.
                    </p>
                    <p>
                        <b>Hand-lettering and design</b> can be used in a variety of contexts, including branding and marketing,
                        graphic design, and even personal art projects. The hand-drawn lettering adds a personal touch and
                        can help communicate a specific tone or emotion, while the design elements provide balance, contrast,
                         and visual interest.
                    </p>
                    <p>
                        Some common techniques used in hand-lettering and design include: <i>sketching, lettering styles,
                        flourishes and embellishments, color, composition</i>.
                    </p>
                    <p>
                        <b>Hand-lettering and design</b> is a versatile art form that combines typography, graphic design,
                        and illustration to create unique and expressive visual communication.
                    </p>',
            ],
            [
                'category_id' => 4,
                'category_name' => 'Modern Calligraphy',
                'category_image' => 'uploads/cateImages/3157660e3c37a3783f33c56381c5b70c.jpg',
                'category_description' => '<p>
                        <b>Modern calligraphy</b> is a contemporary form of calligraphy that combines traditional calligraphy
                        techniques with modern design elements. It has become increasingly popular in recent years,
                        especially with the rise of social media platforms like Instagram, where modern calligraphers
                        showcase their work.
                    </p>
                    <p>
                        Unlike <b>traditional calligraphy</b>, which is often focused on creating perfect and precise
                        letterforms, modern calligraphy allows for more freedom and creativity. It often incorporates
                        elements of hand-lettering, illustration, and graphic design, and can be used to create a wide
                        range of styles and visual effects.
                    </p>
                    <p>
                        Some key characteristics of modern calligraphy include: <i>variation in line weight,
                            experimentation with letterforms,
                            use of color, incorporation of design elements, use of non-traditional tools</i>.
                    </p>
                    <p>
                        <b>Modern calligraphy</b> is a versatile and creative art form that allows calligraphers
                        to push the boundaries of traditional calligraphy and create unique and expressive designs.
                    </p>',
            ],
        ]);
    }
}
