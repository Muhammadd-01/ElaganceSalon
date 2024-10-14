@extends('pages.template')
@section('content')
<section class="not_found_section padding">
    <div class="container">
        <div class="404_content align-center">
            <img class="mb-20" src="img/not-found.png" alt="404">
            <h2>404 Error Not Found</h2>
            <p>The Page Looking for is not here. We can’t find the page you’re looking for. <br> Check our our Help
                Center or head back to home.</p>
            <a href="index-2.html" class="default_btn">Back To Home</a>
        </div>
    </div>
</section>
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
                    <p>
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
