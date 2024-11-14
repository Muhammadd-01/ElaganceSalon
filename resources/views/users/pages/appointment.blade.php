@extends('users.pages.template')
@php
    use Illuminate\Support\Facades\Auth;
    $currentUser = Auth::user(); // Get the logged-in user
@endphp
@section('content')

<section class="page_header d-flex align-items-center">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
            <h3>Trendy Salon &amp; Spa</h3>
            <h2>Appointment</h2>
            <div class="heading-line"></div>
        </div>
    </div>
</section>
<section class="service_section bg-grey padding">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
            <h3>Trendy Salon &amp; Spa</h3>
            <h2>Our Services</h2>
            <div class="heading-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                <div class="service_box">
                    <i class="bs bs-scissors-1"></i>
                    <h3>Haircut Styles</h3>
<p>A barber is a professional whose primary role is to cut, groom, and style hair.</p>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                <div class="service_box">
                    <i class="bs bs-razor-2"></i>
                    <h3>Beard Trimming</h3>
<p>A barber is a professional whose main role is to cut, groom, and shape facial hair.</p>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                <div class="service_box">
                    <i class="bs bs-brush"></i>
                    <h3>Smooth Shave</h3>
<p>A barber is a professional whose primary job is to cut, groom, and shave facial hair to perfection.</p>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="500ms">
                <div class="service_box">
                    <i class="bs bs-hairbrush-1"></i>
                    <h3>Face Masking</h3>
<p>A barber is a professional whose main role is to cut, groom, style, and offer facial treatments for relaxation.</p>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="book_section padding">
    <div class="book_bg"></div>
    <div class="map_pattern"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-6">
                <form action="{{ route('appointments.store') }}" method="POST" id="appointment_form" class="form-horizontal appointment_form">
                    @csrf
                    <div class="book_content">
                        <h2>Make an appointment</h2>
                        <p>Barber is a person whose occupation is mainly to cut, groom, and shave men's and boys' hair.</p>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 padding-10">
                            <input type="text" id="app_name" name="app_name" class="form-control" placeholder="Name" required>
=======
    <section class="book_section padding">
        <div class="book_bg"></div>
        <div class="map_pattern"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <form action="{{ route('appointments.store') }}" method="POST" id="appointment_form"
                        class="form-horizontal appointment_form">
                        @csrf
                        <input type="text" name="user_id" value="{{ $currentUser->id ?? '' }}" hidden>
                        <div class="book_content">
                            <h2>Make an appointment</h2>
                            <p>Barber is a person whose occupation is mainly to cut, groom, and shave men's and boys' hair.
                            </p>

                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 padding-10">
                                <input type="text" id="app_name" name="app_name" class="form-control" placeholder="Name"
                                    value="{{ $currentUser->name ?? '' }}" required readonly>
                            </div>
                            <div class="col-md-6 padding-10">
                                <input type="email" id="app_email" name="app_email" class="form-control"
                                    placeholder="Your Email" value="{{ $currentUser->email ?? '' }}" required readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 padding-10">
                                <input type="text" id="app_phone" name="app_phone" class="form-control"
                                    placeholder="Your Phone No" value="{{ $currentUser->mobile ?? '' }}" required readonly>
                            </div>
                            <div class="col-md-6 padding-10">
                                <input type="date" id="app_book_date" name="book_date" class="form-control" placeholder="Booking Date" required>
                            </div>
                            <div class="col-md-6 padding-10">
                                <input type="time" id="app_book_time" name="book_time" class="form-control" placeholder="Booking Time" required>
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 padding-10">
                                <!-- Dynamic Service Dropdown -->
                                <select class="form-control" id="app_service" onchange="getprice()" name="serviceId"
                                    required>
                                    <option value="">Choose Service</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 padding-10">
                                <input type="text" id="pay_amount" name="pay_amount" class="form-control"
                                    placeholder="Payment Amount" required readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 padding-10">
                                <select class="form-control" id="payment_method" name="payment_method" required>
                                    <option value="">Payment Method</option>
                                    <option value="credit_card">Credit Card</option>
                                    <option value="paypal">PayPal</option>
                                    <option value="cash">Cash</option>
                                </select>
                            </div>
                            <div class="col-md-6 padding-10">
                                <input type="hidden" name="status" value="pending">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 padding-10">
                                <p id="service_price" class="text-center" style="font-weight: bold;"></p>
                            </div>
                        </div>
                        <button id="app_submit" class="default_btn" type="submit">Make Appointment</button>
                        <div id="msg-status" class="alert" role="alert"></div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <section id="team" class="team_section bd-bottom padding">
        <div class="container">
            <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">
                <h3>Elegance Salon</h3>
                <h2>Our Barbers</h2>
                <div class="heading-line"></div>
            </div>
            <ul class="team_members row">
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                    <div class="team_member">
                        <img src="img/team-1.jpg" alt="Team Member">
                        <div class="overlay">
                            <h3>Jazib Salman</h3>
                            <p>WEB DESIGNER</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                    <div class="team_member">
                        <img src="img/team-2.jpg" alt="Team Member">
                        <div class="overlay">
                            <h3>Affan</h3>
                            <p>WORDPRESS DEVELOPER</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                    <div class="team_member">
                        <img src="img/team-3.jpg" alt="Team Member">
                        <div class="overlay">
                            <h3>Zaki Haider</h3>
                            <p>ONLINE MARKETER</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="500ms">
                    <div class="team_member">
                        <img src="img/team-4.jpg" alt="Team Member">
                        <div class="overlay">
                            <h3>Hamza Akram</h3>
                            <p>JAVA SPECIALIST</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="cta_section padding">
        <div class="container">
            <div class="display-table">
                <div class="table-cel">
                    <div class="cta_content align-center wow fadeInUp" data-wow-delay="300ms">
                        <h2>Making You Look Good <br> Is In Our Heritage.</h2>
                        <p>Barber is a person whose occupation is mainly to cut dress groom <br>style and shave men's
                            and boys hair.</p>
                        <a href="#" class="default_btn">Make Appointment</a>
                    </div>
                </div>

            </li>
            <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                <div class="team_member">
                    <img src="img/team-2.jpg" alt="Team Member">
                    <div class="overlay">
                        <h3>José Carpio</h3>
                        <p>WORDPRESS DEVELOPER</p>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                <div class="team_member">
                    <img src="img/team-3.jpg" alt="Team Member">
                    <div class="overlay">
                        <h3>Michel Ibáñez</h3>
                        <p>ONLINE MARKETER</p>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="500ms">
                <div class="team_member">
                    <img src="img/team-4.jpg" alt="Team Member">
                    <div class="overlay">
                        <h3>Adam Castellon</h3>
                        <p>JAVA SPECIALIST</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="cta_section padding">
    <div class="container">
        <div class="display-table">
            <div class="table-cel">
                <div class="cta_content align-center wow fadeInUp" data-wow-delay="300ms">
                    <h2>Making You Look Good <br> Is In Our Heritage.</h2>
                    <p>A barber is a professional whose primary role is to cut, groom, style,<br> and shave men’s and boys’ hair.</p>

                    <a href="#" class="default_btn">Make Appointment</a>
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
    <script>
        function getprice() {
            let Id = document.getElementById('app_service').value;
            // alert('Service selected: ' + Id);

            // Make an AJAX call using Fetch API
            fetch(`/get-price/${Id}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok ' + response.statusText);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.price) {
                        // alert('Price: ' + data.price);
                        // You can also update the DOM to show the price

                        document.getElementById('pay_amount').value = `${data.price} Rs`;
                    } else {
                        alert('Price not found.');
                    }
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        }
    </script>
@endsection
