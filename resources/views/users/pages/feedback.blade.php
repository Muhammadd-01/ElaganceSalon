@extends('users.pages.template')
@section('content')
<section class="contact-section padding">
    <div class="map"></div>
    <div class="container">
        <div class="contact-wrap d-flex align-items-center row">

            <div class="col-lg-10 sm-padding">
                <div class="contact-form">
                    <form action="https://html.dynamiclayers.net/dl/barbershop/contact.php" method="post"
                        id="ajax_form" class="form-horizontal">
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name"
                                    required>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="message" name="message" cols="30" rows="5"
                                    class="form-control message" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="submit" class="default_btn" type="submit">Send Feedback</button>
                            </div>
                        </div>
                        <div id="form-messages" class="alert" role="alert"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
