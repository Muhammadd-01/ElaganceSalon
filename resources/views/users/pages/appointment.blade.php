@extends('users.pages.template')

@php
    use Illuminate\Support\Facades\Auth;
    $currentUser = Auth::user(); // Get the logged-in user
@endphp

@section('content')

<section class="page-header">
    <div class="container text-center">
        <h1 class="main-title">Trendy Salon &amp; Spa</h1>
        <h2 class="sub-title">Appointment</h2>
        <hr class="separator">
    </div>
</section>

<section class="services-section py-5">
    <div class="container">
        <div class="section-heading text-center mb-5">
            <h3 class="section-title">Our Services</h3>
            <p class="section-description">We offer the best salon services for your grooming needs.</p>
        </div>

        <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-box">
                    <i class="bs bs-scissors-1 service-icon"></i>
                    <h3>Haircut Styles</h3>
                    <p>Professional hair cutting and styling to match your unique style.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-box">
                    <i class="bs bs-razor-2 service-icon"></i>
                    <h3>Beard Trimming</h3>
                    <p>Precision beard trimming for a neat and stylish look.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-box">
                    <i class="bs bs-brush service-icon"></i>
                    <h3>Smooth Shave</h3>
                    <p>A classic shave for a fresh, clean look.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-box">
                    <i class="bs bs-hairbrush-1 service-icon"></i>
                    <h3>Face Masking</h3>
                    <p>Relaxing facial treatments for glowing skin.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="appointment-section bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-6">
                <form action="{{ route('appointments.store') }}" method="POST" id="appointment_form">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $currentUser->id ?? '' }}">

                    <div class="appointment-form">
                        <h2 class="form-title">Make an Appointment</h2>
                        <p class="form-description">Book an appointment to experience premium barber services.</p>

                        <div class="form-row">
                            <div class="col-md-6">
                                <input type="text" id="app_name" name="app_name" class="form-control" placeholder="Name" value="{{ $currentUser->name ?? '' }}" readonly>
                            </div>
                            <div class="col-md-6">
                                <input type="email" id="app_email" name="app_email" class="form-control" placeholder="Your Email" value="{{ $currentUser->email ?? '' }}" readonly>
                            </div>
                        </div>

                        <div class="form-row mt-3">
                            <div class="col-md-6">
                                <input type="text" id="app_phone" name="app_phone" class="form-control" placeholder="Your Phone No" value="{{ $currentUser->mobile ?? '' }}" readonly>
                            </div>
                            <div class="col-md-6">
                                <input type="date" id="app_book_date" name="book_date" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-row mt-3">
                            <div class="col-md-6">
                                <input type="time" id="app_book_time" name="book_time" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control" id="app_service" name="serviceId" onchange="getPrice()" required>
                                    <option value="">Choose Service</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-row mt-3">
                            <div class="col-md-6">
                                <input type="text" id="pay_amount" name="pay_amount" class="form-control" placeholder="Payment Amount" readonly>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control" id="payment_method" name="payment_method" required>
                                    <option value="">Payment Method</option>
                                    <option value="credit_card">Credit Card</option>
                                    <option value="paypal">PayPal</option>
                                    <option value="cash">Cash</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-4">Make Appointment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="cta-section py-5 text-center">
    <div class="container">
        <h2>Making You Look Good Is In Our Heritage</h2>
        <p>Experience premium grooming with Trendy Salon &amp; Spa.</p>
        <a href="#appointment" class="btn btn-secondary">Make Appointment</a>
    </div>
</section>

<script>
    function getPrice() {
        let serviceId = document.getElementById('app_service').value;

        fetch(`/get-price/${serviceId}`)
            .then(response => response.json())
            .then(data => {
                if (data.price) {
                    document.getElementById('pay_amount').value = `${data.price} Rs`;
                }
            })
            .catch(error => console.error('Error fetching price:', error));
    }
</script>

@endsection
