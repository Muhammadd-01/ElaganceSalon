@extends('users.pages.template')


@section('content')
<section class="page_header d-flex align-items-center">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
            <h3>Trendy Salon &amp; Spa</h3>
            <h2>Barbers Pricing</h2>
            <div class="heading-line"></div>
        </div>
    </div>
</section>
<section class="pricing_section bg-grey bd-bottom padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 sm-padding">
                <div class="price_wrap">
                    <h3>Hair Styling</h3>
                    <ul class="price_list">
                        <li>
                            <h4>Hair Cut</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                            </p>
                            <span class="price">$8</span>
                        </li>
                        <li>
                            <h4>Hair Styling</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                            </p>
                            <span class="price">$9</span>
                        </li>
                        <li>
                            <h4>Hair Triming</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                            </p>
                            <span class="price">$10</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 sm-padding">
                <div class="price_wrap">
                    <h3>Shaving</h3>
                    <ul class="price_list">
                        <li>
                            <h4>Clean Shaving</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                            </p>
                            <span class="price">$8</span>
                        </li>
                        <li>
                            <h4>Beard Triming</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                            </p>
                            <span class="price">$9</span>
                        </li>
                        <li>
                            <h4>Smooth Shave</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                            </p>
                            <span class="price">$10</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 sm-padding">
                <div class="price_wrap">
                    <h3>Face Masking</h3>
                    <ul class="price_list">
                        <li>
                            <h4>White Facial</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                            </p>
                            <span class="price">$8</span>
                        </li>
                        <li>
                            <h4>Face Cleaning</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                            </p>
                            <span class="price">$9</span>
                        </li>
                        <li>
                            <h4>Bright Tuning</h4>
                            <p>Barber is a person whose occupation is mainly to cut dress groom style and shave men.
                            </p>
                            <span class="price">$10</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
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
