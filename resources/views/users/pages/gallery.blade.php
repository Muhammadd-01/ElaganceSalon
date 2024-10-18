@extends('users.pages.template')


@section('content')
section class="page_header d-flex align-items-center">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Trendy Salon &amp; Spa</h3>
                <h2>Barbershop Gallery</h2>
                <div class="heading-line"></div>
            </div>
        </div>
    </section>
    <section id="gallery" class="gallery_section bg-grey bd-bottom padding">
        <div class="container">
            <ul class="gallery_filter mb-30">
                <li class="active" data-filter="*">All</li>
                <li data-filter=".branding">Haircut</li>
                <li data-filter=".website">Face Masking</li>
                <li data-filter=".print">Shaving</li>
                <li data-filter=".photo">Hair Color</li>
            </ul>
            <ul class="portfolio_items row">
                <li class="col-lg-6 col-md-6 padding-15 single_item branding">
                    <figure class="portfolio_item">
                        <img src="img/portfolio-1.jpg" alt="Portfolio Item">
                        <figcaption class="overlay">
                            <a href="img/portfolio-1.jpg" class="img_popup"></a>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-lg-3 col-md-6 padding-15 single_item photo">
                    <figure class="portfolio_item">
                        <img src="img/portfolio-2.jpg" alt="Portfolio Item">
                        <figcaption class="overlay">
                            <a href="img/portfolio-2.jpg" class="img_popup"></a>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-lg-3 col-md-6 padding-15 single_item print branding">
                    <figure class="portfolio_item">
                        <img src="img/portfolio-3.jpg" alt="Portfolio Item">
                        <figcaption class="overlay">
                            <a href="img/portfolio-3.jpg" class="img_popup"></a>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-lg-3 col-md-6 padding-15 single_item website photo">
                    <figure class="portfolio_item">
                        <img src="img/portfolio-4.jpg" alt="Portfolio Item">
                        <figcaption class="overlay">
                            <a href="img/portfolio-4.jpg" class="img_popup"></a>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-lg-3 col-md-6 padding-15 single_item print photo">
                    <figure class="portfolio_item">
                        <img src="img/portfolio-5.jpg" alt="Portfolio Item">
                        <figcaption class="overlay">
                            <a href="img/portfolio-5.jpg" class="img_popup"></a>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-lg-6 col-md-6 padding-15 single_item branding website">
                    <figure class="portfolio_item">
                        <img src="img/portfolio-6.jpg" alt="Portfolio Item">
                        <figcaption class="overlay">
                            <a href="img/portfolio-6.jpg" class="img_popup"></a>
                        </figcaption>
                    </figure>
                </li>
            </ul>
        </div>
    </section>
    <section class="cta_section padding">
        <div class="container">
            <div class="display-table">
                <div class="table-cel">
                    <div class="cta_content align-center wow fadeInUp" data-wow-delay="300ms">
                        <h2>Making You Look Good <br> Is In Our Haritage.</h2>
                        <p>Barber is a person whose occupation is mainly to cut dress groom <br>style and shave men's
                            and boys hair.</p>
                        <a href="#" class="default_btn">Make Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sponsor_section bg-grey padding">
        <div class="container">
            <ul id="sponsor_carousel" class="sponsor_items owl-carousel">
                <li class="sponsor_item">
                    <img src="img/sponsor-1.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="img/sponsor-2.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="img/sponsor-3.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="img/sponsor-4.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="img/sponsor-5.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="img/sponsor-1.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="img/sponsor-2.png" alt="sponsor-image">
                </li>
                <li class="sponsor_item">
                    <img src="img/sponsor-3.png" alt="sponsor-image">
                </li>
            </ul>
        </div>
    </div>
    <section class="widget_section padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer_widget">
                        <img class="mb-15" src="img/logo.png" alt="Brand">
                        <p>Our barbershop is the created for men who appreciate premium quality, time and flawless look.
                        </p>
                        <ul class="widget_social">
                            <li><a href="#"><i class="social_facebook"></i></a></li>
                            <li><a href="#"><i class="social_twitter"></i></a></li>
                            <li><a href="#"><i class="social_googleplus"></i></a></li>
                            <li><a href="#"><i class="social_instagram"></i></a></li>
                            <li><a href="#"><i class="social_linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer_widget">
                        <h3>Headquaters</h3>
                        <p>962 Fifth Avenue, 3rd Floor New York, NY10022</p>
                        <p><a href="https://html.dynamiclayers.net/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="327a575e5e5d72564b5c535f5b515e534b5740411c5c5746">[email&#160;protected]</a>
                            <br>(+123) 456 789 101</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer_widget">
                        <h3>Opening Hours</h3>
                        <ul class="opening_time">
                            <li>Monday - Friday 11:30am - 2:008pm</li>
                            <li>Saturday – Monday: 9am – 8pm</li>
                            <li>Monday - Friday 5:30am - 11:008pm</li>
                            <li>Saturday - Sunday 4:30am - 1:00pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 sm-padding">
                    <div class="footer_widget">
                        <h3>Subscribe to our contents</h3>
                        <div class="subscribe_form">
                            <form action="#" class="subscribe_form">
                                <input type="email" name="email" id="subs-email" class="form_input"
                                    placeholder="Email Address...">
                                <button type="submit" class="submit">SUBSCRIBE</button>
                                <div class="clearfix"></div>
                                <div id="subscribe-result">
                                    <p class="subscription-success"></p>
                                    <p class="subscription-error"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
