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
    background-color: #f3efe2; /* Light background for section */
    padding: 40px;
    margin: 50px auto;
    max-width: 800px; /* Maximum width for better layout */
    text-align: center; /* Center text for elegance */
    border-radius: 12px; /* Rounded corners for a soft look */
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
}

.service-description h2 {
    font-size: 28px; /* Heading size */
    color: #6b4e31; /* Vintage color for headings */
    font-weight: bold; /* Bold for emphasis */
    margin-bottom: 20px; /* Space below heading */
    font-family: 'Playfair Display', serif; /* Elegant serif font */
}

.service-description p {
    font-size: 16px; /* Paragraph size */
    color: #555; /* Darker color for text */
    line-height: 1.6; /* Line height for readability */
    margin: 15px 0; /* Space above and below paragraphs */
}

.service-description ul {
    list-style-type: none; /* Remove default list styling */
    padding: 0; /* Remove padding */
}

.service-description ul li {
    font-size: 16px; /* List item size */
    color: #333; /* Darker color for list items */
    margin: 10px 0; /* Space between list items */
    text-align: left; /* Align text to the left for readability */
}

.service-description ul li strong {
    color: #6b4e31; /* Vintage color for emphasis on steps */
}
.before-after-gallery {
    background-color: #f3efe2; /* Light background for section */
    padding: 40px;
    margin: 50px auto;
    max-width: 1200px; /* Max width for better layout */
    text-align: center; /* Center text for elegance */
    border-radius: 12px; /* Rounded corners for a soft look */
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
}

.before-after-gallery h2 {
    font-size: 28px; /* Heading size */
    color: #6b4e31; /* Vintage color for headings */
    font-weight: bold; /* Bold for emphasis */
    margin-bottom: 30px; /* Space below heading */
    font-family: 'Playfair Display', serif; /* Elegant serif font */
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
    padding: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    position: relative; /* Position relative for absolute elements */
    overflow: hidden; /* Hide overflow for smooth images */
}

.image-slider {
    position: relative; /* Position relative for absolute elements */
    overflow: hidden; /* Hide overflow for smooth images */
}

.before-image, .after-image {
    width: 100%; /* Responsive image size */
    border-radius: 6px; /* Rounded corners for images */
    transition: opacity 0.5s ease; /* Smooth transition for images */
    position: absolute; /* Position absolute for overlay effect */
    top: 0; /* Align to top */
    left: 0; /* Align to left */
}

.after-image {
    opacity: 0; /* Start with after image hidden */
}

.gallery-item:hover .after-image {
    opacity: 1; /* Show after image on hover */
}

.gallery-item:hover .before-image {
    opacity: 0; /* Hide before image on hover */
}

.gallery-item p {
    font-size: 16px; /* Caption size */
    color: #6b4e31; /* Vintage color for captions */
    margin-top: 10px; /* Space above captions */
    font-weight: bold; /* Make caption bold for emphasis */
}

/* Responsive Design */
@media (min-width: 768px) {
    .gallery-grid {
        grid-template-columns: repeat(2, 1fr); /* 2 columns on medium screens */
    }
}

@media (min-width: 1024px) {
    .gallery-grid {
        grid-template-columns: repeat(3, 1fr); /* 3 columns on large screens */
    }
}

</style>
<div class="before-after-gallery">
    <h2>Before and After: Bright Facial Transformations</h2>
    <div class="gallery-grid">
        <div class="gallery-item">
            <div class="image-slider">
                <img src="https://via.placeholder.com/300x200?text=Before+1" alt="Before Bright Facial 1" class="before-image">
                <img src="https://via.placeholder.com/300x200?text=After+1" alt="After Bright Facial 1" class="after-image">
            </div>
            <p>Transformation 1</p>
        </div>
        <div class="gallery-item">
            <div class="image-slider">
                <img src="https://via.placeholder.com/300x200?text=Before+2" alt="Before Bright Facial 2" class="before-image">
                <img src="https://via.placeholder.com/300x200?text=After+2" alt="After Bright Facial 2" class="after-image">
            </div>
            <p>Transformation 2</p>
        </div>
        <div class="gallery-item">
            <div class="image-slider">
                <img src="https://via.placeholder.com/300x200?text=Before+3" alt="Before Bright Facial 3" class="before-image">
                <img src="https://via.placeholder.com/300x200?text=After+3" alt="After Bright Facial 3" class="after-image">
            </div>
            <p>Transformation 3</p>
        </div>
        <div class="gallery-item">
            <div class="image-slider">
                <img src="https://via.placeholder.com/300x200?text=Before+4" alt="Before Bright Facial 4" class="before-image">
                <img src="https://via.placeholder.com/300x200?text=After+4" alt="After Bright Facial 4" class="after-image">
            </div>
            <p>Transformation 4</p>
        </div>
        <div class="gallery-item">
            <div class="image-slider">
                <img src="https://via.placeholder.com/300x200?text=Before+5" alt="Before Bright Facial 5" class="before-image">
                <img src="https://via.placeholder.com/300x200?text=After+5" alt="After Bright Facial 5" class="after-image">
            </div>
            <p>Transformation 5</p>
        </div>
        <div class="gallery-item">
            <div class="image-slider">
                <img src="https://via.placeholder.com/300x200?text=Before+6" alt="Before Bright Facial 6" class="before-image">
                <img src="https://via.placeholder.com/300x200?text=After+6" alt="After Bright Facial 6" class="after-image">
            </div>
            <p>Transformation 6</p>
        </div>
    </div>
</div>

<div class="service-description">
    <h2>Why Choose Our Bright Facial?</h2>
    <p>
        At Elegance Men Hair Salon, our Bright Facial is designed to rejuvenate and revitalize your skin, giving you a radiant glow. This luxurious treatment combines deep cleansing, exfoliation, and hydration to ensure your skin looks and feels its best.
    </p>
    <p>
        Our skilled barbers use only high-quality products enriched with natural ingredients, ensuring a soothing and effective experience tailored to your skin type. Enjoy personalized consultations to address your unique skincare needs and achieve optimal results.
    </p>
    <p>
        The Bright Facial includes:
    </p>
    <ul>
        <li><strong>Cleansing:</strong> We start with a gentle cleanser to remove impurities and prepare your skin for treatment.</li>
        <li><strong>Exfoliation:</strong> Our exfoliation process sloughs off dead skin cells, revealing a brighter complexion.</li>
        <li><strong>Mask Application:</strong> A specially formulated brightening mask is applied, tailored to your skin type.</li>
        <li><strong>Moisturizing:</strong> We finish with a hydrating moisturizer to lock in moisture and enhance your glow.</li>
    </ul>
    <p>
        Experience the transformative effects of our Bright Facial and step out with confidence, showcasing a revitalized and luminous appearance.
    </p>
</div>


@endsection
