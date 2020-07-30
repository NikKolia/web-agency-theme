<?php get_header(); ?>

    <!-- Local page styles
    ================================================== -->
    <style>
        /**
         * ===================================================================
         * 1. intro section
         * -------------------------------------------------------------------
         */
        #intro {
            background: url(<?php echo get_template_directory_uri(); ?>/assets/images/intro-bg.jpg) no-repeat center;
            background-size: cover;
            -moz-background-size: cover;
            -webkit-background-size: cover;
            width: 100%;
            height: 90%;
            min-height: 640px;
            display: table;
            padding: 0;
            position: relative;
        }

        #intro .content {
            background: rgba(0, 0, 0, 0.5);
            top: 30%;
            width: 100%;
            vertical-align: middle;
            padding: 12rem 0;
            position: absolute;
        }

        #intro .content h1 {
            color: #fff;
            font-weight: bolder;
        }

        #intro .content h2 {
            color: #fff;
            margin-bottom: 0;
        }

        /**
         * responsive:
         * intro
         * -------------------------------------------------------------------
         */
        @media only screen and (max-width: 1024px) {
            .intro-content {
                -webkit-transform: translateY(0);
                -ms-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @media only screen and (max-width: 768px) {
            #intro {
                min-height: 660px;
            }
        }

        @media only screen and (max-width: 600px) {
            #intro {
                min-height: 600px;
            }
        }

        @media only screen and (max-width: 400px) {
            #intro {
                min-height: 550px;
            }
        }


        /**
         * ===================================================================
         * 2. second section
         * -------------------------------------------------------------------
         */
        section#second {
            background: #f6f8f7;
            border-bottom: 1px solid #7eced5;
            padding-bottom: 5rem;
            padding-top: 6rem;
        }

        /**
         * ===================================================================
         * 3. process section
         * -------------------------------------------------------------------
         */
        #features {
            background: #fff;
            padding-bottom: 7rem;
        }

        #features .img {
            float: left;
            width: 30%;
        }

        #features .text {
            float: right;
            width: 70%;
        }

        #features .bgrid {
            padding: 0 20px;
        }

        #features h5 {
            font-family: Georgia, serif;
            font-weight: bold;
            text-transform: none;
            line-height: 2.6rem;
            margin-bottom: 0.4rem;
        }

        #features sub {
            bottom: 0;
            font-size: 1.4rem;
            margin-bottom: 0.4rem;
        }

        #features p {
            line-height: 2.6rem;
        }


        /**
         * ===================================================================
         * 4. portfolio section
         * -------------------------------------------------------------------
         */
        #portfolio {
            background: #252124;
            padding-top: 6rem;
            padding-bottom: 6rem;
            position: relative;
            width: 100%;
            overflow: hidden;
            text-align: center;
        }

        #portfolio h2 {
            color: #fff;
            margin-bottom: 2rem;
        }

        /**
         * ===================================================================
         * 5. services
         * -------------------------------------------------------------------
         */
        #services {
            padding-bottom: 5rem;
        }

        #services .bgrid {
            margin-bottom: 5rem;
        }

    </style>

    <!-- intro section
    ================================================== -->
    <section id="intro">
        <div class="content">
            <div class="row section-intro">
                <div class="col-twelve">
                    <h1>BRINGING NEW BUSINESS TO YOUR BUSINESS</h1>
                    <h2>LOS ANGELES WEB DESIGN & INTERNET MARKETING</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- /intro -->


    <!-- second section
    ================================================== -->
    <section id="second">
        <div class="row section-intro">
            <div class="col-twelve">
                <h2>HOW WE HELP YOU GENERATE BUSINESS ONLINE</h2>
            </div>
            <div class="col-twelve">
                <p>Established 1984 <i class="fa fa-star" aria-hidden="true"></i> 36 Years Experience in Software
                    Development <i class="fa fa-star" aria-hidden="true"></i> 20 years Experience in Web Design /
                    Development</p>
                <p><i class="fa fa-star" aria-hidden="true"></i> 15 Years Experience in SEO</p>
                <p><i class="fa fa-star" aria-hidden="true"></i>We have helped our clients generate millions of dollars
                </p>
            </div>
        </div>
    </section>


    <!-- features section
    ================================================== -->
    <section id="features">
        <div class="row">
            <div class="block-1-3 block-tab-full group">
                <div class="bgrid">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-1.png"
                                          alt="" title=""></div>
                    <div class="text">
                        <h5>Eye Catching Business Websites</h5>
                        <sub>Web Design & Development</sub>
                        <p>In this day of savvy internet visitors, super busy lifestyles and short attention spans, you
                            only
                            have a few seconds to catch your visitors eye and get them to stay.<br>
                            <a href="">Read More</a></p>
                    </div>
                </div>
                <!-- /bgrid-1 Custom web Desing -->
                <div class="bgrid">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-3.png"
                                          alt="" title=""></div>
                    <div class="text">
                        <h5>An Educated, Experienced, Professional Software Development Team with Decades of Development
                            Experience</h5>
                        <p>Choosing the right software development team is crucial to your website project Experienced,
                            professional programmers write clean, working code, ....<br>
                            <a href="#">Read More</a></p>
                    </div>
                </div>
                <!-- /bgrid-3 Why choose us-->
                <div class="bgrid">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-6.png"
                                          alt="" title=""></div>
                    <div class="text">
                        <h5>Search Engine Optimization aka SEO</h5>
                        <p>Being easy to find on the search engines generates a lot of business. . .<br>
                            <a href="#">Read More</a></p>
                    </div>
                </div>
                <!-- /bgrid-6 Seo-->


                <div class="bgrid">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-4.png"
                                          alt="" title=""></div>
                    <div class="text">
                        <h5>Fully Responsive</h5>
                        <p>We develop responsive websites so that they are friendly on desktops, mobile phones, tablets
                            ....<br>
                            <a href="#">Read More</a></p>
                    </div>
                </div>
                <!-- /bgrid-4 Respo website-->
                <div class="bgrid">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-5.png"
                                          alt="" title=""></div>
                    <div class="text">
                        <h5>Captivating Powerful Content Writing</h5>
                        <p>Content is a key factor in presenting your service and guaranteeing calls from visitors.</p>
                    </div>
                </div>
                <!-- /bgrid-5 Seo content wr-->
                <div class="bgrid">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-2.png"
                                          alt="" title=""></div>
                    <div class="text">
                        <h5>Marketing and Branding</h5>
                        <p>We work with you to iIdentify and define business objectives, potential markets, and
                            opportunities.<br>
                            <b>Logo Design, Company Branding</b><br>
                            <a href="#">Read More</a></p>
                    </div>
                </div>
                <!-- /bgrid-2  Branding-->
            </div>
        </div>
    </section>
    <!-- /process -->


    <!-- portfolio section
    ================================================== -->
    <section id="portfolio">
        <div class="row section-intro">
            <div class="col-twelve">
                <h2>Portfolio</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-twelve">
                <?php echo do_shortcode('[slide-anything id=85]'); ?>
            </div>
        </div>
    </section>
    <!-- /portfolio -->


    <!-- services section
    ================================================== -->
    <section id="services">
        <div class="row">
            <div class="block-1-3 block-tab-full group">
                <div class="bgrid">
                    <h5>SEO Content Writing</h5>
                    <p>Our marketing team writes brilliant content that sets your product apart from others.</p>
                    <a class="button" href="#">Learn More</a>
                </div>
                <!-- /bgrid-1 -->
                <div class="bgrid">
                    <h5>Grab Your Visitors</h5>
                    <p>Material that grabs the attention of your visitors within seconds.</p>
                    <a class="button" href="#">Learn More</a>
                </div>
                <!-- /bgrid-2 -->
                <div class="bgrid">
                    <h5>Search Engine Visibility</h5>
                    <p>Your website needs to be visible on the search engine search results to generate business.</p>
                    <a class="button" href="#">Learn More</a>
                </div>
                <!-- /bgrid-3 -->
            </div>
        </div>
    </section>
    <!-- /process -->


    <!-- cta section
    ================================================== -->
    <section id="cta">
        <div class="row">
            <div class="col-twelve">
                <h2>Start growing your business online today</h2>
                <a class="button" href="#">Contact Us</a>
            </div>
        </div>
    </section>
    <!-- /cta -->
    <!-- blog
    ================================================= -->
    <section id="cta">
        <div class="row">
            <div class="col-twelve">
                <h2>Blog</h2>
                <article>

                    <?php // Display blog posts
                    $temp = $wp_query;
                    $wp_query = null;
                    $wp_query = new WP_Query();
                    $wp_query->query('showposts=5' . '&paged=' . $paged);
                    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                        <h3><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h3>
                        <?php the_excerpt(); ?>

                    <?php endwhile; ?>

                    <?php if ($paged > 1) { ?>

                        <nav id="nav-posts">
                            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                            <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
                        </nav>

                    <?php } else { ?>

                        <nav id="nav-posts">
                            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
                        </nav>

                    <?php } ?>

                    <?php wp_reset_postdata(); ?>

                </article>
            </div>
        </div>
    </section>
    <!-- /blog -->

<?php get_footer(); ?>