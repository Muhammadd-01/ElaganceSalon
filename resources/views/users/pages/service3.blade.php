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
     /* Smooth Shave Section */
           .smooth-shave {
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
        .smooth-shave h2 {
            font-size: 36px;
            color: #6b4e31;
            font-weight: bold;
            font-style: italic;
            margin-bottom: 20px;
        }

        /* Subheading styles */
        .smooth-shave h3 {
            font-size: 24px;
            color: #6b4e31;
            margin-bottom: 20px;
            font-style: italic;
        }

        /* Description styles */
        .smooth-shave p {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 20px;
            padding: 0 20px; /* Added padding for better readability on mobile */
        }

        /* Techniques grid */
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
    </style>



    <div class="smooth-shave">
        <h2>Smooth Shave</h2>
        <h3>Experience the Art of Traditional Shaving</h3>
        <p>Indulge in a luxurious smooth shave that revitalizes your skin and elevates your grooming routine. Our experienced barbers utilize classic techniques and high-quality products to ensure you leave feeling refreshed and confident.</p>

        <div class="techniques-grid">
            <div class="technique-card">
                <img src="https://via.placeholder.com/300x200?text=Traditional+Straight+Razor+Shave" alt="Traditional Straight Razor Shave">
                <h4>Traditional Straight Razor Shave</h4>
                <p>A classic technique that provides an ultra-smooth finish, perfect for those who appreciate timeless grooming.</p>
            </div>
            <div class="technique-card">
                <img src="https://via.placeholder.com/300x200?text=Hot+Towel+Shave" alt="Hot Towel Shave">
                <h4>Hot Towel Shave</h4>
                <p>A relaxing treatment that opens pores for a closer shave, leaving your skin feeling soft and rejuvenated.</p>
            </div>
            <div class="technique-card">
                <img src="https://via.placeholder.com/300x200?text=Beard+Line+Up" alt="Beard Line Up">
                <h4>Beard Line Up</h4>
                <p>Perfect for maintaining your facial hair while achieving a clean look. Enhance your style effortlessly.</p>
            </div>
            <div class="technique-card">
                <img src="https://via.placeholder.com/300x200?text=Beard+Line+Up" alt="Beard Line Up">
                <h4>Beard Line Up</h4>
                <p>Perfect for maintaining your facial hair while achieving a clean look. Enhance your style effortlessly.</p>
            </div>
            <div class="technique-card">
                <img src="https://via.placeholder.com/300x200?text=Beard+Line+Up" alt="Beard Line Up">
                <h4>Beard Line Up</h4>
                <p>Perfect for maintaining your facial hair while achieving a clean look. Enhance your style effortlessly.</p>
            </div>
            <div class="technique-card">
                <img src="https://via.placeholder.com/300x200?text=Luxury+Shaving+Experience" alt="Luxury Shaving Experience">
                <h4>Luxury Shaving Experience</h4>
                <p>A full-service experience including a massage and skin treatment to ensure a refreshing and pampering session.</p>
            </div>
        </div>

        <a href="#" class="cta-button">Schedule Your Smooth Shave Today</a>
    </div>

@endsection
