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
                    <h3>Beard Triming</h3>
                    <p>Sharp edges and smooth fades—experience the art of grooming."</p>
                </div></a>
            </div>
            <div class="col-lg-3 col-md-6 padding-15 wow fadeInUp" data-wow-delay="400ms">
                <a class="service1" href="service3"> <div class="service_box">
                    <i class="bs bs-brush"></i>
                    <h3>Smooth Shave</h3>
                    <p>"Feel the difference—smooth as silk, sharp as style."</p>
                </div></a>
            </div>
            <div class="col-lg-3 col-md-6 padding-15 wow fadeInUp" data-wow-delay="500ms">
           <a class="service1" href="service4">    <div class="service_box">
                    <i class="bs bs-hairbrush-1"></i>
                    <h3>Face Masking</h3>
                    <p>"Pamper your face with a mask that rejuvenates and relaxes."</p>
                </div></a>
            </div>
            <div class="col-lg-3 col-md-6 padding-15 wow fadeInUp" data-wow-delay="600ms">
              <a class="service1" href="service5">  <div class="service_box">
                    <i class="bs bs-razor"></i>
                    <h3>Beard Triming</h3>
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
                    <h3>Hair Straight</h3>
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
<section class="cta_section padding">
    <div class="container">
        <div class="display-table">
            <div class="table-cel">
                <div class="cta_content align-center wow fadeInUp" data-wow-delay="300ms">
                    <h2>Making You Look Good <br> Is In Our Haritage.</h2>
                    <p>Barber is a person whose occupation is mainly to cut dress groom <br>style and shave men's
                        and boys hair.</p>
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
