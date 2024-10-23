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
.color-options-gallery {
    background-color: #f3efe2; /* Light background for gallery */
    padding: 40px;
    margin: 50px auto;
    max-width: 1200px; /* Max width for better layout */
    text-align: center; /* Center text for elegance */
    border-radius: 12px; /* Rounded corners for a soft look */
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
}

.color-options-gallery h2 {
    font-size: 32px; /* Heading size */
    color: #6b4e31; /* Vintage color for headings */
    font-weight: bold; /* Bold for emphasis */
    margin-bottom: 30px; /* Space below heading */
    font-style: italic; /* Italic style for a classy touch */
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(1, 1fr); /* Default for mobile */
    gap: 30px; /* Space between grid items */
}

.gallery-item {
    background-color: #fff; /* White background for items */
    border: 2px solid #a67c52; /* Vintage border color */
    border-radius: 8px; /* Rounded corners for a soft look */
    padding: 20px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    transition: transform 0.3s ease; /* Transition effect */
}

.gallery-item:hover {
    transform: translateY(-5px); /* Lift effect on hover */
}

.gallery-item img {
    width: 100%; /* Responsive image size */
    border-radius: 6px; /* Rounded corners for images */
    object-fit: cover; /* Ensure images cover the card area */
}

.gallery-item h3 {
    font-size: 20px; /* Title size */
    color: #6b4e31; /* Vintage color for titles */
    margin: 15px 0; /* Space above and below titles */
    font-weight: bold; /* Make title bold for emphasis */
}

.gallery-item p {
    font-size: 16px; /* Paragraph size */
    color: #555; /* Darker color for text */
    line-height: 1.5; /* Line height for readability */
}

/* Responsive Design */
@media (min-width: 768px) {
    .gallery-grid {
        grid-template-columns: repeat(2, 1fr); /* 2 columns on medium screens */
    }
}

@media (min-width: 1024px) {
    .gallery-grid {
        grid-template-columns: repeat(4, 1fr); /* 4 columns on large screens */
    }
}

</style>

<div class="color-options-gallery">
    <h2>Our Hair Coloring Techniques</h2>
    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="https://via.placeholder.com/300x200?text=Classic+Highlights" alt="Classic Highlights">
            <h3>Classic Highlights</h3>
            <p>Brightening and dimension without a complete color change.</p>
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/300x200?text=Balayage" alt="Balayage">
            <h3>Balayage</h3>
            <p>A natural-looking sun-kissed effect.</p>
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/300x200?text=Full+Color" alt="Full Color">
            <h3>Full Color</h3>
            <p>A bold transformation with rich, vibrant colors.</p>
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/300x200?text=Full+Color" alt="Full Color">
            <h3>Full Color</h3>
            <p>A bold transformation with rich, vibrant colors.</p>
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/300x200?text=Full+Color" alt="Full Color">
            <h3>Full Color</h3>
            <p>A bold transformation with rich, vibrant colors.</p>
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/300x200?text=Full+Color" alt="Full Color">
            <h3>Full Color</h3>
            <p>A bold transformation with rich, vibrant colors.</p>
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/300x200?text=Full+Color" alt="Full Color">
            <h3>Full Color</h3>
            <p>A bold transformation with rich, vibrant colors.</p>
        </div>
        <div class="gallery-item">
            <img src="https://via.placeholder.com/300x200?text=Creative+Color" alt="Creative Color">
            <h3>Creative Color</h3>
            <p>Unique shades like pastel or neon for a standout look.</p>
        </div>
    </div>
</div>
<div class="service-description">
    <h2>Why Choose Our Hair Coloring Service?</h2>
    <p>At Elegance Men Hair Salon, we understand that your hair is an essential part of your identity. Our professional hair coloring service is designed to help you express your style and personality. Our skilled barbers use high-quality products to ensure vibrant, long-lasting color that enhances your natural look.</p>
    <p>Whether you desire a subtle change with classic highlights, a bold transformation with full color, or a trendy balayage effect, we offer personalized consultations to help you achieve your desired look. Trust our experts to provide a seamless coloring experience that leaves you feeling refreshed, confident, and stylish.</p>
</div>

@endsection
