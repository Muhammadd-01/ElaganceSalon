@extends('users.pages.template')


@section('content')
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
@endsection
