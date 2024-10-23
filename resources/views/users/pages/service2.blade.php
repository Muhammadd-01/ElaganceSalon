@extends('users.pages.template')


@section('content')
<style>
/* Service Description Section */
    .service-description {
        background-color: #faf5e6;
        border: 3px solid #a67c52;
        padding: 40px;
        max-width: 900px;
        margin: 50px auto;
        text-align: center;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        border-radius: 12px;
        position: relative;
    }

    /* Decorative elements */
    .service-description:before, .service-description:after {
        content: "";
        display: block;
        width: 70%;
        height: 2px;
        background-color: #a67c52;
        margin: 0 auto;
        position: absolute;
    }

    .service-description:before {
        top: 10px;
    }

    .service-description:after {
        bottom: 10px;
    }

    /* Heading styles */
    .service-description h2 {
        font-size: 36px;
        color: #6b4e31;
        font-weight: bold;
        font-style: italic;
        margin-bottom: 20px;
    }

    /* Paragraph styles */
    .service-description p {
        font-size: 18px;
        line-height: 1.6;
        color: #555;
        margin-bottom: 20px;
    }

    /* Decorative dividers */
    .divider {
        width: 60%;
        height: 1px;
        background-color: #a67c52;
        margin: 20px auto;
    }

    /* Vintage icon for emphasis */
    .service-description .icon {
        font-size: 24px;
        color: #a67c52;
        margin-bottom: 15px;
    }
    .beard-styles {
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
        .beard-styles h2 {
            font-size: 36px;
            color: #6b4e31;
            font-weight: bold;
            font-style: italic;
            margin-bottom: 30px;
        }

        /* Styles grid */
        .styles-grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr); /* Default for mobile */
            gap: 30px;
            margin-top: 20px;
        }

        /* Individual style card */
        .style-card {
            background-color: #fff;
            border: 2px solid #a67c52;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .style-card:hover {
            transform: translateY(-5px);
        }

        /* Image styles */
        .style-card img {
            width: 100%;
            border-radius: 6px;
        }

        /* Style title */
        .style-card h3 {
            font-size: 24px;
            color: #6b4e31;
            margin: 15px 0;
        }

        /* Style description */
        .style-card p {
            font-size: 16px;
            color: #555;
            line-height: 1.5;
        }

        /* Responsive Design */
        @media (min-width: 768px) {
            .styles-grid {
                grid-template-columns: repeat(2, 1fr); /* 2 cards on medium screens */
            }
        }

        @media (min-width: 1024px) {
            .styles-grid {
                grid-template-columns: repeat(3, 1fr); /* 3 cards on large screens */
            }
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


    <div class="service-description">
        <h2>Why Choose Our Beard Trimming Service?</h2>
        <p class="icon">✂️</p>
        <p>At Elegance Men Hair Salon, our skilled barbers deliver precision beard trims tailored to suit your unique style. With years of experience, we focus on perfecting every detail, using high-quality tools and products to ensure the finest results.</p>
        <div class="divider"></div>
        <p>Whether you prefer a clean, sharp look or a fuller, more natural beard, we offer personalized trimming to enhance your appearance. Each session includes a thorough consultation to understand your preferences and recommend the best style for your face shape.</p>
        <div class="divider"></div>
        <p>Experience a blend of classic barbering techniques and modern grooming trends, all in a relaxing vintage-inspired setting. We use premium beard oils and balms for a refreshing finish that keeps your beard looking its best.</p>
    </div>




    <div class="beard-styles">
        <h2>Beard Styles Offered</h2>
        <div class="styles-grid">
            <div class="style-card">
                <img src="https://via.placeholder.com/300x200?text=Full+Beard" alt="Full Beard">
                <h3>The Full Beard</h3>
                <p>A classic choice for those who appreciate a robust and natural look. Ideal for adding character and masculinity.</p>
            </div>
            <div class="style-card">
                <img src="https://via.placeholder.com/300x200?text=Goatee" alt="Goatee">
                <h3>The Goatee</h3>
                <p>Refined and stylish, the goatee brings a modern edge to your appearance. Perfect for showcasing your jawline.</p>
            </div>
            <div class="style-card">
                <img src="https://via.placeholder.com/300x200?text=Goatee" alt="Goatee">
                <h3>The Goatee</h3>
                <p>Refined and stylish, the goatee brings a modern edge to your appearance. Perfect for showcasing your jawline.</p>
            </div>
            <div class="style-card">
                <img src="https://via.placeholder.com/300x200?text=Goatee" alt="Goatee">
                <h3>The Goatee</h3>
                <p>Refined and stylish, the goatee brings a modern edge to your appearance. Perfect for showcasing your jawline.</p>
            </div>
            <div class="style-card">
                <img src="https://via.placeholder.com/300x200?text=Short+Boxed+Beard" alt="Short Boxed Beard">
                <h3>The Short Boxed Beard</h3>
                <p>A neatly trimmed and structured style for a professional look. Maintains a polished appearance at all times.</p>
            </div>
            <div class="style-card">
                <img src="https://via.placeholder.com/300x200?text=Van+Dike" alt="Van Dyke">
                <h3>The Van Dyke</h3>
                <p>A distinguished style featuring a pointed beard and mustache. Perfect for those looking for a sophisticated edge.</p>
            </div>
        </div>
    </div>

@endsection
