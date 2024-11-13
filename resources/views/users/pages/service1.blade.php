@extends('users.pages.template')


@section('content')
<style>

    /* Container for the section */
    .why-choose-us {
        background-color: #fff;
        border: 3px solid #a67c52;
        padding: 30px;
        max-width: 800px;
        margin: 40px auto;
        text-align: center;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        border-radius: 8px;
        position: relative;
    }

    /* Decorative lines above and below title */
    .why-choose-us:before, .why-choose-us:after {
        content: "";
        display: block;
        width: 60%;
        height: 1px;
        background-color: #a67c52;
        margin: 0 auto;
        position: absolute;
    }

    .why-choose-us:before {
        top: 10px;
    }

    .why-choose-us:after {
        bottom: 10px;
    }

    /* Vintage-style title */
    .why-choose-us h2 {
        font-size: 36px;
        color: #6b4e31;
        margin-bottom: 20px;
        font-style: italic;
    }

    /* Bullet points styling */
    .why-choose-us ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .why-choose-us ul li {
        font-size: 20px;
        padding: 12px 0;
        border-bottom: 1px dotted #a67c52;
        position: relative;
    }

    /* Adding icons to the bullet points */
    .why-choose-us ul li:before {
        content: "\2713"; /* Checkmark symbol */
        color: #a67c52;
        font-size: 22px;
        position: absolute;
        left: -30px;
        top: 5px;
    }

    /* Last item border removal */
    .why-choose-us ul li:last-child {
        border-bottom: none;
    }
      /* Call to Action Section */
      .call-to-action {
            background-color: #faf5e6;
            border: 3px solid #a67c52;
            padding: 50px;
            max-width: 800px;
            margin: 60px auto;
            text-align: center;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
            border-radius: 12px;
            position: relative;
        }

        /* Decorative vintage lines */
        .call-to-action:before, .call-to-action:after {
            content: "";
            display: block;
            width: 70%;
            height: 2px;
            background-color: #a67c52;
            margin: 0 auto;
            position: absolute;
        }

        .call-to-action:before {
            top: 15px;
        }

        .call-to-action:after {
            bottom: 15px;
        }

        /* Vintage-style heading */
        .call-to-action h2 {
            font-size: 36px;
            color: #6b4e31;
            font-weight: bold;
            margin-bottom: 20px;
            font-style: italic;
        }

        /* Subheading text */
        .call-to-action p {
            font-size: 20px;
            margin-bottom: 30px;
            color: #555;
            line-height: 1.5;
        }

        /* Call to Action Button */
        .call-to-action a {
            display: inline-block;
            background-color: #6b4e31;
            color: #fff;
            padding: 14px 40px;
            text-decoration: none;
            font-size: 22px;
            border-radius: 8px;
            border: 2px solid #a67c52;
            transition: background-color 0.3s ease, color 0.3s ease;
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
        }

        .call-to-action a:hover {
            background-color: #a67c52;
            color: #fff;
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

<section id="team" class="team_section bd-bottom padding">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">

            <h2>Hairstyle Services</h2>
            <div class="heading-line"></div>
        </div>
        <ul class="team_members row">
            <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                <div class="team_member">
                    <img src="img/" alt="Team Member">
                    <div class="overlay">
                        <h3>Classic Haircuts</h3>
                        <p> Traditional styles that never go out of fashion.</p>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                <div class="team_member">
                    <img src="img/" alt="Team Member">
                    <div class="overlay">
                        <h3>Fades & Tapers</h3>
                        <p>A touch of modern blended with timeless elegance.</p>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                <div class="team_member">
                    <img src="img/" alt="Team Member">
                    <div class="overlay">
                        <h3>Textured Styling</h3>
                        <p>For a natural look with a touch of refinement</p>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="500ms">
                <div class="team_member">
                    <img src="img/" alt="Team Member">
                    <div class="overlay">
                        <h3>Custom Consultations</h3>
                        <p>Tailored advice to help you find your perfect look</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<section id="team" class="team_section  padding">
    <div class="container">

        <ul class="team_members row">
            <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                <div class="team_member">
                    <img src="img/" alt="Team Member">
                    <div class="overlay">
                        <h3>The Classic Gentleman Cut
                        </h3>
                        <p>A traditional haircut with clean lines and a refined finish.</p>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="300ms">
                <div class="team_member">
                    <img src="img/" alt="Team Member">
                    <div class="overlay">
                        <h3>Vintage Pompadour
                        </h3>
                        <p>A timeless style with volume on top and tapered sides.</p>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                <div class="team_member">
                    <img src="img/" alt="Team Member">
                    <div class="overlay">
                        <h3>Tapered Undercut
                        </h3>
                        <p>A stylish blend of length on top with sharp, tapered sides.</p>
                    </div>
                </div>
            </li>
            <li class="col-lg-3 col-md-6 sm-padding wow fadeInUp" data-wow-delay="500ms">
                <div class="team_member">
                    <img src="img/" alt="Team Member">
                    <div class="overlay">
                        <h3>Messy Fringe
                        </h3>
                        <p>A laid-back cut with a textured front for a youthful look.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
</head>
<body>
    <div class="why-choose-us">
        <h2>Why Choose Elegance Men Hair Salon?</h2>
        <ul>
            <li>Skilled Barbers from Pakistan with a passion for tradition.</li>
            <li>Personalized service in a vintage-inspired setting.</li>
            <li>High-quality grooming products used for every client.</li>
            <li>Relaxing atmosphere that blends classic elegance with modern comfort.</li>
        </ul>
    </div>

        <div class="call-to-action">
            <h2>Book Your Appointment Today</h2>
            <p>Step into a world of classic grooming and timeless style. Discover the charm of Elegance Men Hair Salon and elevate your look in a vintage-inspired setting.</p>
            <a href="#">Schedule Now</a>
        </div>




@endsection
