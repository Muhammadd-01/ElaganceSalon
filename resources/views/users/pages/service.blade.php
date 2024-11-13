@extends('users.pages.template')


@section('content')
<style>
    .service1{
        text-decoration: none;
        color: black
    }
</style>
<section class="page_header d-flex align-items-center">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">

            <h2>Elegance Services</h2>
            <div class="heading-line"></div>
        </div>
    </div>
</section>
<section class="service_section bg-grey padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 padding-15 wow fadeInUp" data-wow-delay="200ms">
              <a class="service1" href="service1"><div class="service_box">
                    <i class="bs bs-scissors-1"></i>
                    <h3>Haircut Styles</h3>
                    <p>"From classic cuts to modern trends, we shape your style By Elegance"</p>
                </div></a>
            </div>
            <div class="col-lg-3 col-md-6 padding-15 wow fadeInUp" data-wow-delay="300ms">
             <a class="service1" href="service2">  <div class="service_box">
                    <i class="bs bs-razor-2"></i>
                    <h3>Shaving</h3>
                    <p>Sharp edges and smooth fades—experience the art of grooming."</p>
                </div></a>
            </div>
            <div class="col-lg-3 col-md-6 padding-15 wow fadeInUp" data-wow-delay="400ms">
                <a class="service1" href="service3"> <div class="service_box">
                    <i class="bs bs-brush"></i>
                    <h3>Face Mask</h3>
                    <p>"Feel the difference—smooth as silk, sharp as style."</p>
                </div></a>
            </div>
            <div class="col-lg-3 col-md-6 padding-15 wow fadeInUp" data-wow-delay="500ms">
           <a class="service1" href="service4">    <div class="service_box">
                    <i class="bs bs-hairbrush-1"></i>
                    <h3>Beard Trimming</h3>
                    <p>"Pamper your face with a mask that rejuvenates and relaxes."</p>
                </div></a>
            </div>
            <div class="col-lg-3 col-md-6 padding-15 wow fadeInUp" data-wow-delay="600ms">
              <a class="service1" href="service5">  <div class="service_box">
                    <i class="bs bs-razor"></i>
                    <h3>Message Therapy</h3>
                    <p>Barber is a person whose occupation is mainly to cut dress style.</p>
                </div></a>
            </div>
            <div class="col-lg-3 col-md-6 padding-15 wow fadeInUp" data-wow-delay="700ms">
                <a class="service1" href="service6"><div class="service_box">
                    <i class="bs bs-hairbrush"></i>
                    <h3>Hair Coloring</h3>
                    <p>Vibrant shades, bold looks—transform your style with confidence."</p>
                </div></a>
            </div>
            <div class="col-lg-3 col-md-6 padding-15 wow fadeInUp" data-wow-delay="800ms">
               <a class="service1" href="service7"><div class="service_box">
                    <i class="bs bs-comb-2"></i>
                    <h3>Hair Wash</h3>
                    <p>"Smooth and sleek—unruly hair tamed to perfection by Elegance."</p>
                </div></a>
            </div>
            <div class="col-lg-3 col-md-6 padding-15 wow fadeInUp" data-wow-delay="900ms">
               <a class="service1" href="service8"> <div class="service_box">
                    <i class="bs bs-perfume"></i>
                    <h3>Bright Facial</h3>
                    <p>"Glow up with a facial that restores radiance and vitality."</p>
                </div></a>
            </div>
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
<p>Barbers specialize in cutting, grooming, styling, and shaving hair for men, ensuring a polished look.</p>

                            <span class="price">$8</span>
                        </li>
                        <li>
                        <h4>Hair Styling</h4>
                        <p>Barber is a person whose occupation is mainly to cut, dress, groom,<br> style, and shave men’s hair.</p>
                            <span class="price">$9</span>
                        </li>
                        <li>
                        <h4>Hair Trimming</h4>
<p>A barber is a professional whose main occupation is to cut, groom, style,<br> trim, and shave men’s hair.</p>

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
                        <p>A barber is a professional whose main occupation is to cut, dress, groom,<br> style, and provide clean shaves for men.</p>
                            <span class="price">$8</span>
                        </li>
                        <li>
                        <h4>Beard Trimming</h4>
                        <p>A barber is a professional whose main occupation is to cut, dress, groom,<br> style, trim, and shave men’s beards.</p>
                            <span class="price">$9</span>
                        </li>
                        <li>
                        <h4>Smooth Shave</h4>
                        <p>A barber is a professional whose main occupation is to cut, dress, groom,<br> style, and provide a smooth shave for men.</p>
                            <span class="price">$10</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 sm-padding">
                <div class="price_wrap">
                    <h3>Face Mask</h3>
                    <ul class="price_list">
                        <li>
                        <h4>White Facial</h4>
                        <p>A barber is a professional whose main occupation is to cut, dress, groom,<br> style, shave, and provide white facials for men.</p>
                            <span class="price">$8</span>
                        </li>
                        <li>
                        <h4>Face Cleaning</h4>
                        <p>A barber is a professional whose main occupation is to cut, dress, groom,<br> style, shave, and provide face cleaning for men.</p>
                            <span class="price">$9</span>
                        </li>
                        <li>
                        <h4>Bright Tuning</h4>
                        <p>A barber is a professional whose main occupation is to cut, dress, groom,<br> style, shave, and provide bright tuning for men.</p>
                            <span class="price">$10</span>
                            <br>
                            <br>
                            <br>
                            <br>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 sm-padding">
                <div class="price_wrap">
                    <h3>Beard Trimming</h3>
                    <ul class="price_list">
                        <li>
                        <h4>Fade Beard Trim</h4>
<p>Gradually blends the beard with the hair on the sides, creating a seamless transition, commonly paired with shorter haircuts.</p>

                            <span class="price">$5</span>
                        </li>
                        <li>
                        <h4>Goatee Trim</h4>
<p>Carefully trims and sculpts the goatee, preserving its length while sharpening the outline.</p>

                            <span class="price">$7</span>
                        </li>
                        <li>
                        <h4>Ducktail Beard Trim</h4>
<p>Maintains length at the front while tapering the sides, forming a distinctive "tail" shape at the chin.</p>

                            <span class="price">$10</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 sm-padding">
                <div class="price_wrap">
                    <h3>Massage Therapy</h3>
                    <ul class="price_list">
                        <li>
                        <h4>Swedish Massage</h4>
<p>A soothing massage that uses long, flowing strokes and kneading techniques to enhance relaxation and boost circulation.</p>

                            <span class="price">$13</span>
                        </li>
                        <li>
                        <h4>Deep Tissue Massage</h4>
<p>Targeting the deeper layers of muscle, this massage applies firm pressure to alleviate chronic tension and discomfort.</p>

                            <span class="price">$20</span>
                        </li>
                        <li>
                        <h4>Hot Stone Massage</h4>
<p>Warmed stones are positioned on the body and incorporated into the massage to promote relaxation and ease muscle stiffness.</p>

                            <span class="price">$17</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 sm-padding">
                <div class="price_wrap">
                    <h3>Hair Wash</h3>
                    <ul class="price_list">
                        <li>
                        <h4>Basic Hair Wash</h4>
<p>Purifies the hair and scalp with shampoo, followed by conditioner to moisturize and smooth out tangles.</p>

                            <span class="price">$13</span>
                        </li>
                        <li>
                        <h4>Clarifying Wash</h4>
<p>Eliminates product buildup and excess oils, delivering a thorough cleanse; perfect for occasional use.</p>

                            <span class="price">$10</span>
                        </li>
                        <li>
                        <h4>Sulfate-Free Wash</h4>
<p>Provides a mild cleanse without harsh sulfates, ideal for sensitive scalps or color-treated hair.</p>

                            <span class="price">$15</span>
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
                <h2>Our Legacy Is About Making You Look Your Best.</h2>
<p>A barber is a professional whose main job is to cut, groom, style,<br> and shave men’s and boys’ hair.</p>

                    <a href="appointment" class="default_btn">Make Appointment</a>
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
