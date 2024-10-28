@extends('users.pages.template')


@section('content')
<section class="page_header d-flex align-items-center">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
            <h3>Trendy Salon &amp; Spa</h3>
            <h2>Barbershop News</h2>
            <div class="heading-line"></div>
        </div>
    </div>
</section>
<section class="blog-section padding">
    <div class="container">
        <div class="blog-wrap row">
            <div class="col-lg-8 sm-padding">
                <div class="row blog-classic">
                    <div class="col-lg-12">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="img/post-1.jpg" alt="post">
                                <span class="category"><a href="#">interior</a></span>
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">Minimalist trending in modern architecture 2019</a></h3>
                                <p>Building first evolved out dynamics between needs means available building
                                    materials attendant skills.Home renovations, especially those involving
                                    plentiful of demolition can be a very dusty affair. This nasty dust can easily
                                    free flow through the air and into your house.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="img/post-2.jpg" alt="post">
                                <span class="category"><a href="#">Architecture</a></span>
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">Terrace in the town yamazaki kentaro design workshop.</a></h3>
                                <p>Building first evolved out dynamics between needs means available building
                                    materials attendant skills.Home renovations, especially those involving
                                    plentiful of demolition can be a very dusty affair. This nasty dust can easily
                                    free flow through the air and into your house.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <img src="img/post-3.jpg" alt="post">
                                <span class="category"><a href="#">Design</a></span>
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">W270 house são paulo arquitetos fabio jorge architeqture.</a></h3>
                                <p>Building first evolved out dynamics between needs means available building
                                    materials attendant skills.Home renovations, especially those involving
                                    plentiful of demolition can be a very dusty affair. This nasty dust can easily
                                    free flow through the air and into your house.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="pagination-wrap text-left mt-30">
                    <li><a href="#"><i class="ti-arrow-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#" class="active">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="ti-arrow-right"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4 sm-padding">
                <div class="sidebar-wrap">
                    <div class="widget-content">
                        <form action="#" class="search-form">
                            <input type="text" class="form-control" placeholder="Type here">
                            <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget-content">
                        <h4>Categories</h4>
                        <ul class="widget-links">
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Designing</a></li>
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Buildings</a></li>
                        </ul>
                    </div>
                    <div class="widget-content">
                        <h4>Recent Posts</h4>
                        <ul class="thumb-post">
                            <li><img src="img/post-1.jpg" alt="post"><a href="#">Minimalist trending in modern
                                    architecture 2019</a></li>
                            <li><img src="img/post-2.jpg" alt="post"><a href="#">Terrace in the town kentaro design
                                    workshop.</a></li>
                            <li><img src="img/post-3.jpg" alt="post"><a href="#">W270 house são arquitetos fabio
                                    architeqture.</a></li>
                        </ul>
                    </div>
                    <div class="widget-content">
                        <h4>Tag Clouds</h4>
                        <ul class="tags">
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Designing</a></li>
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Buildings</a></li>
                            <li><a href="#">Industrial</a></li>
                            <li><a href="#">Factory</a></li>
                            <li><a href="#">Material</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
