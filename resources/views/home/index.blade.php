<x-layouts.master>

    <section class="bg-secondary-color position-relative pb-md-0 pb-xl-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-9 col-xl-9 pb-5">
                    <h1 class="header-title">Mastering Calligraphy</h1>

                    <p>
                        Welcome to Scratchy Nib, the ultimate resource for learning and practicing the art of calligraphy.
                        Our website is designed to help you explore the beauty and artistry of this ancient craft, and to provide
                        you with the tools and knowledge you need to become a skilled calligrapher.
                    </p>

                    <h5>Ready to start your journey into the world of calligraphy?</h5>

                    <p>
                        Sign up for our newsletter to receive updates on new tutorials, events, and products,
                        and to stay up-to-date on the latest trends and techniques in this beautiful and timeless art form.
                    </p>

                    <form class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="firstName" placeholder="Your first name">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Your email address">
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary-color">SUBSCRIBE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <img class="banner-img" src="{{asset('storage/images/header-cover.png')}}" alt="">
    </section>

    <section class="bg-primary-color">
        <div class="container text-primary-color">
            <h1 class="my-3 text-center text-primary">Calligraphy</h1>
            <p>
                Calligraphy is an ancient art form that originated in China over 2000 years ago.
                It involves the creation of beautiful and intricate writing, using a variety of techniques and tools.
                Calligraphy has been used throughout history for a wide range of purposes, from religious texts to
                decorative artwork, and it has evolved into a diverse and vibrant art form with many different styles
                and techniques.
            </p>
            <div class="row">
                <div class="col-md-12 col-lg-6 mt-3">
                    <h6 class="fw-semibold text-primary"><i class="fa-duotone fa-sparkles"></i> Visit our online store to find a wide selection of calligraphy supplies, including pens, ink, paper, and more.</h6>
                    <a class="btn btn-primary-color btn-more-about mt-2 pe-4">Shop Calligraphy Supplies <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <div class="col-md-12 col-lg-6 mt-3">
                    <h6 class="fw-semibold text-primary"><i class="fa-duotone fa-sparkles"></i> Check out our blog for tips, tutorials, and advice on mastering the art of calligraphy, from basic techniques to advanced skills.</h6>
                    <a class="btn btn-primary-color btn-more-about mt-2 pe-4">Learn Calligraphy <i class="fa-solid fa-arrow-right"></i></a>
                </div>

            </div>

            <div class="row">
                <div class="col-12 mt-3">
                    <h6 class="fw-semibold text-primary"><i class="fa-duotone fa-sparkles"></i> Browse our collection of stunning calligraphic artwork, created by some of the world's most talented calligraphers.</h6>
                    <a class="btn btn-primary-color btn-more-about mt-2 pe-4">Explore Our Gallery <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <x-partials.overlay-bottom color="bg-secondary-color" />

    </section>

    <section class="">
        <div class="container text-primary">
            <h1 class="my-3 text-center text-primary">Traditional Calligraphy</h1>
            <div class="row mb-3">
                <div class="col-sm-4 col-md-4 col-lg-2 offset-lg-1">
                    <img class="img-fluid" src="{{asset('storage/images/divider-pink.png')}}" alt="divider">
                </div>
            </div>

            <div class="row text-primary-color">
                <div class="col-md-6 col-lg-5 offset-lg-1 text-center">
                    <p>
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
                    </p>
                </div>
                <div class="col-md-6 col-lg-5 offset-lg-1 text-center">
                    <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Wang_Xianzi_Imitation_by_Tang_Dynasty.JPG/1280px-Wang_Xianzi_Imitation_by_Tang_Dynasty.JPG" alt="">
                    <i><b>新婦地黃湯帖</b> by Wang Xianzhi</i>
                    <row>
                        <div class="col">
                            <button class="btn btn-secondary-color btn-more-about mt-3 pe-4">More about Traditional Calligraphy <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </row>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary-color">
        <x-partials.overlay-top />
        <div class="container text-secondary">
            <h1 class="mb-3 text-center">Contemporary Calligraphy</h1>
            <div class="row mb-3">
                <div class="col-sm-4 col-md-4 col-lg-2 offset-lg-1">
                    <img class="img-fluid" src="{{asset('storage/images/divider-pink.png')}}" alt="divider">
                </div>
            </div>
            <div class="row text-primary-color">
                <div class="col-md-6 col-lg-5 offset-lg-1 text-center">
                    <img class="img-fluid" src="https://i.pinimg.com/564x/4d/ec/20/4dec201059f0f7ae894a189453a9f2e9.jpg" alt="">
                    <i>Love it catches you when you're not looking</i>
                </div>

                <div class="col-md-6 col-lg-5 offset-lg-1 text-center">
                    <p>
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
                </div>
            </div>

            <div class="row text-primary-color mt-lg-3">
                <div class="col-md-6 col-lg-5 offset-lg-1 text-center">
                    <p>
                        <b>Contemporary calligraphy</b> is a constantly evolving art form, with new styles and techniques emerging all the time. Some contemporary calligraphers are also pushing the boundaries of the art form by incorporating technology and new media, such as using laser cutters to create intricate calligraphy designs, or experimenting with interactive calligraphy installations.
                    </p>
                    <p>
                        In summary, <b>contemporary calligraphy</b> is a modern interpretation of traditional calligraphy that embraces new techniques, materials, and styles, and allows for more creative expression and experimentation.
                    </p>
                </div>

                <div class="col-md-6 col-lg-5 offset-lg-1 text-center">
                    <img class="img-fluid" src="https://i.pinimg.com/originals/82/39/d8/8239d8337c4058b0e2d6a674075891bd.jpg" alt="">
                    <i>Thanks, Love so much</i>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-primary-color btn-more-about mt-3 pe-4">More about Contemporary Calligraphy <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-partials.overlay-bottom />
    </section>

    <section class="">
        <div class="container text-primary">
            <h1 class="my-3 text-center text-primary">Hand-lettering & Design</h1>
            <div class="row mb-3">
                <div class="col-sm-4 col-md-4 col-lg-2 offset-lg-1">
                    <img class="img-fluid" src="{{asset('storage/images/divider-gold.png')}}" alt="divider">
                </div>
            </div>

            <div class="row text-primary-color">
                <div class="col-md-6 col-lg-5 offset-lg-1 text-center">
                    <p>
                        <b>Hand-lettering and design</b> is a type of visual art that combines hand-drawn lettering and design elements to create a unique and cohesive visual message. Unlike traditional calligraphy, which is focused on creating stylized writing using a particular script, hand-lettering is all about creating letterforms that are uniquely designed for a specific purpose or message.
                    </p>
                    <p>
                        <b>Hand-lettering and design</b> can be used in a variety of contexts, including branding and marketing, graphic design, and even personal art projects. The hand-drawn lettering adds a personal touch and can help communicate a specific tone or emotion, while the design elements provide balance, contrast, and visual interest.
                    </p>
                    <p>
                        Some common techniques used in hand-lettering and design include: <i>sketching, lettering styles, flourishes and embellishments, color, composition</i>.
                    </p>
                    <p>
                        <b>Hand-lettering and design</b> is a versatile art form that combines typography, graphic design, and illustration to create unique and expressive visual communication.
                    </p>
                </div>
                <div class="col-md-6 col-lg-5 offset-lg-1 text-center">
                    <img class="img-fluid" src="https://i.pinimg.com/564x/9f/d8/31/9fd83199bb40ea2977b7f5313f3a3665.jpg" alt="">
                    <i>Just visit this plane</i>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-secondary-color btn-more-about mt-3 pe-4">More about Hand-lettering & Design <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary-color">
        <x-partials.overlay-top />
        <div class="container text-secondary">
            <h1 class="mb-3 text-center">Modern Calligraphy</h1>
            <div class="row mb-3">
                <div class="col-sm-4 col-md-4 col-lg-2 offset-lg-1">
                    <img class="img-fluid" src="{{asset('storage/images/divider-gold.png')}}" alt="divider">
                </div>
            </div>
            <div class="row text-primary-color">
                <div class="col-md-6 col-lg-5 offset-lg-1 text-center">
                    <img class="img-fluid" src="https://i.pinimg.com/564x/78/f6/e7/78f6e7d9fabc5a200e80cbc79ba35dcc.jpg" alt="">
                    <i>Make things happen</i>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-primary-color btn-more-about mt-3 pe-4">More about odern Calligraphy <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 offset-lg-1 text-center">
                    <p>
                        <b>Modern calligraphy</b> is a contemporary form of calligraphy that combines traditional calligraphy techniques with modern design elements. It has become increasingly popular in recent years, especially with the rise of social media platforms like Instagram, where modern calligraphers showcase their work.
                    </p>
                    <p>
                        Unlike <b>traditional calligraphy</b>, which is often focused on creating perfect and precise letterforms, modern calligraphy allows for more freedom and creativity. It often incorporates elements of hand-lettering, illustration, and graphic design, and can be used to create a wide range of styles and visual effects.
                    </p>
                    <p>
                        Some key characteristics of modern calligraphy include: <i>variation in line weight, experimentation with letterforms,
                            use of color, incorporation of design elements, use of non-traditional tools</i>.
                    </p>
                    <p>
                        <b>Modern calligraphy</b> is a versatile and creative art form that allows calligraphers to push the boundaries of traditional calligraphy and create unique and expressive designs.
                    </p>
                </div>
            </div>
        </div>
        <x-partials.overlay-bottom />
    </section>



</x-layouts.master>
