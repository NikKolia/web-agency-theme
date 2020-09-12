<?php get_header(); ?>

    <!-- Local page styles
    ================================================== -->
    <style>
        #intro {
            background: url(<?php echo get_template_directory_uri(); ?>/assets/images/intro-bg.jpg) no-repeat center;
        }
    </style>

    <!-- intro section
    ================================================== -->
    <section id="intro" class="uk-animation-fade" uk-parallax="blur: 10">
        <div class="content">
            <div class="row section-intro"
                 uk-scrollspy="cls: uk-animation-scale-up; target: .uk-card; delay: 500; repeat: true">
                <div class="col-twelve uk-card uk-card-body">
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
            <div class="col-twelve" uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                <h2>HOW WE HELP YOU GENERATE BUSINESS ONLINE</h2>
            </div>
            <div class="col-twelve" uk-scrollspy="cls: uk-animation-slide-right; repeat: false">
                <p>Established 1984 <i class="fa fa-star" aria-hidden="true"></i> 36 Years Experience in Software
                    Development <i class="fa fa-star" aria-hidden="true"></i> 23 years Experience in Web Design / Development</p>
                <p><i class="fa fa-star" aria-hidden="true"></i> 17 Years Experience in SEO</p>
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
                <div class="bgrid" uk-scrollspy="cls:uk-animation-fade; repeat: false">
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
                <div class="bgrid" uk-scrollspy="cls:uk-animation-fade; repeat: false">
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
                <div class="bgrid" uk-scrollspy="cls:uk-animation-fade; repeat: false">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-6.png"
                                          alt="" title=""></div>
                    <div class="text">
                        <h5>Search Engine Optimization aka SEO</h5>
                        <p>Being easy to find on the search engines generates a lot of business. . .<br>
                            <a href="#">Read More</a></p>
                    </div>
                </div>
                <!-- /bgrid-6 Seo-->


                <div class="bgrid" uk-scrollspy="cls:uk-animation-fade; repeat: false">
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
                <div class="bgrid" uk-scrollspy="cls:uk-animation-fade; repeat: false">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-5.png"
                                          alt="" title=""></div>
                    <div class="text">
                        <h5>Captivating Powerful Content Writing</h5>
                        <p>Content is a key factor in presenting your service and guaranteeing calls from visitors.</p>
                    </div>
                </div>
                <!-- /bgrid-5 Seo content wr-->
                <div class="bgrid" uk-scrollspy="cls:uk-animation-fade; repeat: false">
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
                <div class="bgrid uk-animation-toggle" uk-scrollspy="cls:uk-animation-fade; repeat: true" tabindex="0">
                    <h5>SEO Content Writing</h5>
                    <p>Our marketing team writes brilliant content that ranks you at the top of the search engines and
                        sets your product apart from others.</p>
                    <a class="button uk-animation-shake" href="#">Learn More</a>
                </div>
                <!-- /bgrid-1 -->
                <div class="bgrid uk-animation-toggle" uk-scrollspy="cls:uk-animation-fade; repeat: true" tabindex="0">
                    <h5>Grab Your Visitors</h5>
                    <p>Material that grabs the attention of your visitors within seconds.</p>
                    <a class="button uk-animation-shake" href="#">Learn More</a>
                </div>
                <!-- /bgrid-2 -->
                <div class="bgrid uk-animation-toggle" uk-scrollspy="cls:uk-animation-fade; repeat: true" tabindex="0">
                    <h5>Search Engine Visibility</h5>
                    <p>Your website needs to be visible on the search engine search results to generate business.</p>
                    <a class="button uk-animation-shake" href="#">Learn More</a>
                </div>
                <!-- /bgrid-3 -->
            </div>
        </div>
    </section>
    <!-- /process -->


    <!-- cta section
    ================================================== -->
    <section id="cta">
        <div class="row uk-animation-toggle" uk-scrollspy="cls: uk-animation-scale-up; repeat: true">
            <div class="col-twelve">
                <p class="text">O yes, our web-savvy team will provide Web Design that is beautiful&#8230;<br/>
                    <strong><u><font color="#990000">Web Design</font></u></strong> customized to your every need&#8230;<br/>
                    <strong><u><font color="#990000">Web Design</font></u></strong> that&#8217;s affordable&#8230;<br/>
                    <strong><u><font color="#990000">Web Design</font></u></strong> with images that inspire&#8230;
                    <br/>
                    <strong><font color="#990000"><u>Website Design</u></font></strong> that&#8217;s easy to navigate&#8230;<br/>
                    <strong><font color="#990000"><u>Website Design</u></font></strong> with copy that sells&#8230; </p>
                <p>But in addition&#8230; </p>
                <p> A leading Santa Monica based search engine optimizing <font color="#990000"><u>website
                            design</u></font> company serving Los Angeles, Santa Monica, and indeed, the World,
                    COMPUTAID will give you something more&#8230; </p>
                <p> YOUR PERFECT CUSTOMER &#8211; THE ONE WHO IS SEARCHING FOR YOUR PRODUCT OR SERVICE &#8211; DELIVERED
                    TO YOUR WEBSITE ON A SILVER PLATTER&#8230; BECAUSE YOUR WEBSITE IS SO EASY TO FIND! </p>
                <p> We can help drive your website to the top ranks, maximizing your visibility no matter which search
                    engine your clients use. Our wonderful Los Angeles <font color="#990000"><u>Web Design</u></font>
                    Team really knows its way around the ins and outs of <u>website design</u> and search engine
                    optimization. </p>
                <p> We&#8217;ll deliver your <font color="#990000"><u>Website Design</u></font> on time and within
                    budget, with friendly informative service all through the process. And we&#8217;ll be there after
                    you launch your website, to enhance, improve, update, or troubleshoot. So you can be sure your
                    website will continue to deliver the customers you seek, because&#8230; </p>
                <p><strong>YOUR WEBSITE IS DESIGNED WITH SEARCH ENGINES IN MIND.</strong></p>
                <p>LET COMPUTAID BE YOUR WEBSITE DESIGN FIRM AND SEARCH ENGINEERS!</p>
                <h2>Start growing your business online today</h2>
                <a class="button uk-animation-shake" href="#">Contact Us</a>
            </div>
        </div>
    </section>
    <!-- /cta -->

<?php get_footer(); ?>