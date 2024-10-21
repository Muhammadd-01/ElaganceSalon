@extends('users.pages.template')


@section('content')


<section class="page_header d-flex align-items-center">
    <div class="container">
        <div class="section_heading text-center mb-40 wow fadeInUp" data-wow-delay="300ms">

            <h2>Elegance Services</h2>
            <div class="heading-line"></div>
        </div>
    </div>
</section>
    <style>


        /* Face Masking Section */
        .face-masking {
            background-color: #faf5e6;
            border: 3px solid #a67c52;
            padding: 40px;
            max-width: 1200px;
            margin: 50px auto;
            text-align: center;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
        }

        /* Heading styles */
        .face-masking h2 {
            font-size: 36px;
            color: #6b4e31;
            font-weight: bold;
            margin-bottom: 20px;
            font-style: italic;
        }

        /* Subheading styles */
        .face-masking h3 {
            font-size: 24px;
            color: #6b4e31;
            margin-bottom: 20px;
            font-style: italic;
        }

        /* Description styles */
        .face-masking p {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 20px;
            padding: 0 20px; /* Added padding for better readability on mobile */
        }

        /* Masking techniques grid */
        .techniques-grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr); /* Default for mobile */
            gap: 30px;
            margin-top: 40px;
        }

        /* Individual technique card */
        .technique-card {
            background-color: #fff;
            border: 2px solid #a67c52;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .technique-card:hover {
            transform: translateY(-5px);
            background-color: #f0e1c1; /* Change background on hover for effect */
        }

        /* Image styles */
        .technique-card img {
            width: 100%;
            border-radius: 6px;
            object-fit: cover; /* Ensure images cover the card area */
        }

        /* Technique title */
        .technique-card h4 {
            font-size: 20px;
            color: #6b4e31;
            margin: 15px 0;
            font-weight: bold; /* Make title bold for emphasis */
        }

        /* Technique description */
        .technique-card p {
            font-size: 16px;
            color: #555;
            line-height: 1.5;
        }

        /* Responsive Design */
        @media (min-width: 768px) {
            .techniques-grid {
                grid-template-columns: repeat(2, 1fr); /* 2 cards on medium screens */
            }
        }

        @media (min-width: 1024px) {
            .techniques-grid {
                grid-template-columns: repeat(3, 1fr); /* 3 cards on large screens */
            }
        }

        /* Button Styles */
        .cta-button {
            display: inline-block;
            background-color: #a67c52;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #8a5d3b; /* Darken button on hover */
        }
        .service-description {
    background-color: #faf5e6; /* Light vintage background */
    border: 3px solid #a67c52; /* Vintage border color */
    padding: 40px;
    margin: 50px auto;
    max-width: 800px; /* Set a max width for better readability */
    text-align: center; /* Center text for elegance */
    border-radius: 12px; /* Rounded corners for a soft look */
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
}

.service-description h2 {
    font-size: 28px; /* Heading size */
    color: #6b4e31; /* Vintage color for headings */
    font-weight: bold; /* Bold for emphasis */
    margin-bottom: 20px; /* Space below heading */
    font-style: italic; /* Italic style for a classy touch */
}

.service-description p {
    font-size: 18px; /* Paragraph size */
    line-height: 1.6; /* Line height for readability */
    color: #555; /* Darker color for text */
    margin-bottom: 20px; /* Space below paragraphs */
    padding: 0 20px; /* Added padding for mobile readability */
}

    </style>

    <div class="face-masking">
        <h2>Face Masking</h2>
        <h3>Revitalize Your Skin and Relax</h3>
        <p>Indulge in our luxurious face masking service, designed to rejuvenate and hydrate your skin. Our expert barbers use high-quality products to ensure you leave feeling refreshed and confident.</p>

        <div class="techniques-grid">
            <div class="technique-card">
                <img src="https://via.placeholder.com/300x200?text=Hydrating+Face+Mask" alt="Hydrating Face Mask">
                <h4>Hydrating Face Mask</h4>
                <p>Perfect for dry skin, this mask replenishes moisture and revitalizes your complexion.</p>
            </div>
            <div class="technique-card">
                <img src="https://via.placeholder.com/300x200?text=Detoxifying+Clay+Mask" alt="Detoxifying Clay Mask">
                <h4>Detoxifying Clay Mask</h4>
                <p>Cleanses and purifies your skin, removing impurities and refining pores for a fresh look.</p>
            </div>
            <div class="technique-card">
                <img src="https://via.placeholder.com/300x200?text=Detoxifying+Clay+Mask" alt="Detoxifying Clay Mask">
                <h4>Detoxifying Clay Mask</h4>
                <p>Cleanses and purifies your skin, removing impurities and refining pores for a fresh look.</p>
            </div>
            <div class="technique-card">
                <img src="https://via.placeholder.com/300x200?text=Detoxifying+Clay+Mask" alt="Detoxifying Clay Mask">
                <h4>Detoxifying Clay Mask</h4>
                <p>Cleanses and purifies your skin, removing impurities and refining pores for a fresh look.</p>
            </div>  
            <div class="technique-card">
                <img src="https://via.placeholder.com/300x200?text=Revitalizing+Sheet+Mask" alt="Revitalizing Sheet Mask">
                <h4>Revitalizing Sheet Mask</h4>
                <p>A quick boost of nutrients for tired skin, leaving you looking refreshed and revitalized.</p>
            </div>
            <div class="technique-card">
                <img src="https://via.placeholder.com/300x200?text=Anti-Aging+Collagen+Mask" alt="Anti-Aging Collagen Mask">
                <h4>Anti-Aging Collagen Mask</h4>
                <p>Promotes elasticity and reduces signs of aging for a youthful appearance.</p>
            </div>
        </div>

        <a href="" class="cta-button">Book Your Face Masking Session Today</a>
    </div>

    <div class="service-description">
        <h2>Why Choose Our Face Masking Service?</h2>
        <p>At Elegance Men Hair Salon, we believe that taking care of your skin is just as important as styling your hair. Our face masking service offers a rejuvenating experience that not only enhances your appearance but also provides a moment of relaxation in your busy day. Using only the finest quality products, our skilled barbers apply masks tailored to your skin type, ensuring optimal results.</p>
        <p>Experience deep hydration, detoxification, and revitalization with our specialized masks. Whether you are looking to hydrate dry skin, detoxify impurities, or achieve a youthful glow, we have the perfect solution for you. Treat yourself to a pampering session that leaves you feeling refreshed, confident, and ready to take on the world.</p>
    </div>


@endsection
