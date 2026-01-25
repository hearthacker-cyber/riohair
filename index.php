<?php 
$pageTitle = "RioHairCo. | Premium Human Hair Processors & Exporters";
include_once 'includes/header.php';
?>
        <style>
            :root {
                --primary-color: #3B2F2F;
                --secondary-color: #C9A24D;
                --background-color: #FAF9F6;
                --text-dark: #2B2B2B;
                --button-hover: #8B6A2B;
            }
            .btn-danger {
                background-color: #C9A24D;
                border-color: #C9A24D;
                color: #fff;
            }

        .btn-danger:hover {
                background-color: #8B6A2B;
                border-color: #8B6A2B;
            }   

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            body {
                font-family: 'Poppins', sans-serif;
                color: var(--text-dark);
                background-color: var(--background-color);
                line-height: 1.6;
            }
            
            h1, h2, h3, h4, h5, h6 {
                font-family: 'Playfair Display', serif;
                font-weight: 600;
                color: var(--primary-color);
            }
            
            /* Navbar */
            .navbar {
                background-color: rgba(255, 255, 255, 0.95);
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
                padding: 1rem 0;
                transition: all 0.3s ease;
            }
            
            .navbar-brand {
                font-family: 'Playfair Display', serif;
                font-weight: 700;
                font-size: 1.8rem;
                color: var(--primary-color) !important;
            }
            
            .navbar-brand span {
                color: var(--secondary-color);
            }
            
            .nav-link {
                font-weight: 500;
                color: var(--primary-color) !important;
                margin: 0 0.5rem;
                transition: all 0.3s ease;
            }
            
            .nav-link:hover, .nav-link.active {
                color: var(--secondary-color) !important;
            }
            
            /* Hero Banner Section */
            .hero-banner-section {
                background: linear-gradient(rgba(59, 47, 47, 0.8), rgba(94, 89, 89, 0.568)), url('/images/banner.png');
                background-size: cover;
                background-position: center;
                color: white;
                padding: 7rem 0;
                text-align: center;
                position: relative;
                overflow: hidden;
                margin-top: 76px; /* To account for fixed navbar */
            }
            
            .hero-banner-section h1 {
                color: white;
                font-size: 3.5rem;
                margin-bottom: 1.5rem;
                text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
            }
            
            .hero-banner-section .tagline {
                font-size: 1.8rem;
                color: var(--secondary-color);
                margin-bottom: 1rem;
                font-weight: 500;
            }
            
            .hero-banner-section .highlight {
                font-size: 1.5rem;
                margin-bottom: 2rem;
                font-weight: 300;
                letter-spacing: 1px;
            }
            
            .hero-banner-section .btn-hero {
                background-color: var(--secondary-color);
                color: white;
                border: none;
                padding: 0.8rem 2.5rem;
                font-weight: 600;
                border-radius: 4px;
                transition: all 0.3s ease;
                font-size: 1.1rem;
            }
            
            .hero-banner-section .btn-hero:hover {
                background-color: var(--button-hover);
                transform: translateY(-3px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }
            
            /* Sections */
            .section-title {
                position: relative;
                padding-bottom: 1rem;
                margin-bottom: 3rem;
                text-align: center;
            }
            
            .section-title:after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                width: 80px;
                height: 3px;
                background-color: var(--secondary-color);
            }
            
            .about-section, .why-choose-section, .cta-section {
                padding: 5rem 0;
            }
            
            /* Main Products Section (4 Columns) */
            .main-products-section {
                padding: 6rem 0;
                background-color: #f5f1eb;
            }
            
            .main-product-card {
                background: white;
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
                height: 100%;
            }
            
            .main-product-card:hover {
                transform: translateY(-15px);
                box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
            }
            
            .main-product-image-container {
                height: 350px;
                overflow: hidden;
            }
            
            .main-product-image {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.5s ease;
            }
            
            .main-product-card:hover .main-product-image {
                transform: scale(1.05);
            }
            
            .main-product-info {
                padding: 2rem;
                text-align: center;
            }
            
            .main-product-name {
                  display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    min-height: 4rem;
            }
            .main-product-name .first-line {
    font-size: 0.85rem; /* Reduced font size for first line */
    font-weight: 600;
    color: var(--primary-color);
    display: block;
    white-space: nowrap; /* Prevent wrapping */
    overflow: hidden;
    text-overflow: ellipsis;
    width: 100%;
    line-height: 1.2;
}
.main-product-name .second-line {
    font-size: 1.1rem; /* Slightly larger for second line */
    font-weight: 700;
    color: var(--primary-color);
    display: block;
    margin-top: 0.2rem;
    line-height: 1.2;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .main-product-name .first-line {
        font-size: 0.75rem;
    }
    
    .main-product-name .second-line {
        font-size: 1rem;
    }
}
            
            .main-product-subtitle {
                color: var(--secondary-color);
                font-size: 1rem;
                margin-bottom: 1.5rem;
                font-weight: 500;
                text-transform: uppercase;
                letter-spacing: 1px;
            }
            
            .main-product-btn {
                background-color: var(--secondary-color);
                color: white;
                border: none;
                padding: 0.8rem 2rem;
                font-weight: 600;
                border-radius: 4px;
                transition: all 0.3s ease;
                text-decoration: none;
                display: inline-block;
            }
            
            .main-product-btn:hover {
                background-color: var(--button-hover);
                color: white;
                transform: translateY(-3px);
                box-shadow: 0 8px 20px rgba(201, 162, 77, 0.3);
            }
            
            /* Image Section */
            .image-section {
                padding: 4rem 0;
                background-color: #f5f1eb;
            }
            
            .image-container {
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
            }
            
            .image-container:hover {
                transform: translateY(-10px);
                box-shadow: 0 25px 40px rgba(0, 0, 0, 0.15);
            }
            
            .image-container img {
                width: 100%;
                height: 400px;
                object-fit: cover;
            }
            
            /* Why Choose Us */
            .feature-card {
                background-color: white;
                padding: 2.5rem 2rem;
                border-radius: 8px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
                height: 100%;
                transition: all 0.3s ease;
                text-align: center;
            }
            
            .feature-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
            }
            
            .feature-icon {
                width: 80px;
                height: 80px;
                background-color: rgba(201, 162, 77, 0.1);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 1.5rem;
                color: var(--secondary-color);
                font-size: 2rem;
            }
            
            /* CTA Section */
            .cta-section {
                background: linear-gradient(rgba(59, 47, 47, 0.9), rgba(59, 47, 47, 0.95)), url('/images/banner.png');
                background-size: cover;
                background-position: center;
                color: white;
                text-align: center;
            }
            
            .cta-section h2 {
                color: white;
            }
            
            .cta-section p {
                font-size: 1.2rem;
                margin-bottom: 2rem;
                max-width: 700px;
                margin-left: auto;
                margin-right: auto;
            }
            
            .btn-cta {
                background-color: var(--secondary-color);
                color: white;
                border: none;
                padding: 1rem 3rem;
                font-weight: 600;
                border-radius: 4px;
                transition: all 0.3s ease;
                font-size: 1.1rem;
            }
            
            .btn-cta:hover {
                background-color: var(--button-hover);
                transform: translateY(-3px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            }
            
            /* Footer */
            .footer {
                background-color: var(--primary-color);
                color: white;
                padding: 3rem 0 1.5rem;
            }
            
            .footer h5 {
                color: var(--secondary-color);
                margin-bottom: 1.5rem;
            }
            
            .footer-links a {
                color: #ddd;
                text-decoration: none;
                display: block;
                margin-bottom: 0.5rem;
                transition: all 0.3s ease;
            }
            
            .footer-links a:hover {
                color: var(--secondary-color);
                padding-left: 5px;
            }
            
            .social-icons a {
                display: inline-block;
                width: 40px;
                height: 40px;
                background-color: rgba(255, 255, 255, 0.1);
                border-radius: 50%;
                text-align: center;
                line-height: 40px;
                color: white;
                margin-right: 10px;
                transition: all 0.3s ease;
            }
            
            .social-icons a:hover {
                background-color: var(--secondary-color);
                transform: translateY(-3px);
            }
            
            .copyright {
                border-top: 1px solid rgba(255, 255, 255, 0.1);
                padding-top: 1.5rem;
                margin-top: 2rem;
                text-align: center;
                color: #aaa;
                font-size: 0.9rem;
            }
            
            /* Production Process Section */
            .production-process-section {
                background-color: #fff;
                padding: 5rem 0;
            }

            .process-card {
                background: white;
                padding: 2rem;
                border-radius: 10px;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
                height: 100%;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .process-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
            }

            .process-icon .emoji-icon {
                font-size: 3rem;
                display: inline-block;
            }

            .process-card .image-container {
                height: 220px;
                overflow: hidden;
                border-radius: 8px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            }

            .process-card img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.5s ease;
            }

            .process-card:hover img {
                transform: scale(1.05);
            }

            .process-card h4 {
                color: var(--primary-color);
                margin-bottom: 1rem;
                font-size: 1.3rem;
                font-weight: 600;
            }

            .process-card p {
                color: var(--text-dark);
                font-size: 0.95rem;
                line-height: 1.6;
            }
            
            /* Responsive Adjustments */
            @media (max-width: 768px) {
                .hero-banner-section {
                    padding: 5rem 0;
                }
                
                .hero-banner-section h1 {
                    font-size: 2.5rem;
                }
                
                .hero-banner-section .tagline {
                    font-size: 1.4rem;
                }
                
                .hero-banner-section .highlight {
                    font-size: 1.2rem;
                }
                
                .about-section, .why-choose-section, .cta-section, .main-products-section {
                    padding: 3rem 0;
                }
                
                .main-product-image-container {
                    height: 250px;
                }
                
                .main-product-name {
                    font-size: 1.3rem;
                    min-height: 3.5rem;
                }
            }
            
            @media (max-width: 576px) {
                .hero-banner-section h1 {
                    font-size: 2rem;
                }
                
                .section-title {
                    font-size: 1.8rem;
                }
                
                .main-product-image-container {
                    height: 200px;
                }
            }

            /* Responsive adjustments */
            @media (max-width: 992px) {
                .process-card .image-container {
                    height: 200px;
                }
            }

            @media (max-width: 768px) {
                .production-process-section {
                    padding: 3rem 0;
                }
                
                .process-card {
                    padding: 1.5rem;
                }
            }
        </style>
    </head>
    <body>
<?php include_once 'includes/navbar.php'; ?>

        <!-- Main Products Section (4 Columns) - SWAPPED ORDER: Clip Extensions first, Natural Hair last -->
<section class="main-products-section">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="section-title">Our Premium Products</h1>
            <p class="lead mb-4">100% Natural Human Hair | Ethically Sourced | Premium Quality</p>
        </div>
        <div class="row">
            <!-- Product 1: Natural Human Hair - Bulk -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="main-product-card">
                    <div class="main-product-image-container">
                        <img src="/images/0.jpg" alt="Natural Human Hair - Bulk" class="main-product-image">
                    </div>
                    <div class="main-product-info">
                        <h3 class="main-product-name">
                            <span class="first-line">NATURAL HUMAN HAIR</span>
                            <span class="second-line">BULK</span>
                        </h3>
                        <div class="main-product-subtitle">100% Natural Human Hair</div>
                        <a href="product.php#product1" class="main-product-btn">View Details</a>
                    </div>
                </div>
            </div>
            
            <!-- Product 2: Natural Human Hair - Blonde -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="main-product-card">
                    <div class="main-product-image-container">
                        <img src="/images/3.jpg" alt="Blonde Hair Extensions" class="main-product-image">
                    </div>
                    <div class="main-product-info">
                        <h3 class="main-product-name">
                            <span class="first-line">NATURAL HUMAN HAIR</span>
                            <span class="second-line">BLONDE</span>
                        </h3>
                        <div class="main-product-subtitle">Premium Blonde Hair</div>
                        <a href="product.php#product3" class="main-product-btn">View Details</a>
                    </div>
                </div>
            </div>
            
            <!-- Product 3: Natural Human Hair - Weaves -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="main-product-card">
                    <div class="main-product-image-container">
                        <img src="/images/2.jpg" alt="Weaves Hair Extensions" class="main-product-image">
                    </div>
                    <div class="main-product-info">
                        <h3 class="main-product-name">
                            <span class="first-line">NATURAL HUMAN HAIR</span>
                            <span class="second-line">WEAVES (WEFT)</span>
                        </h3>
                        <div class="main-product-subtitle">Sew-in Hair Weaves</div>
                        <a href="product.php#product2" class="main-product-btn">View Details</a>
                    </div>
                </div>
            </div>
            
            <!-- Product 4: Natural Human Hair - Clip-in Extensions -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="main-product-card">
                    <div class="main-product-image-container">
                        <img src="/images/4.jpg" alt="Clip-in Hair Extensions" class="main-product-image">
                    </div>
                    <div class="main-product-info">
                        <h3 class="main-product-name">
                            <span class="first-line">NATURAL HUMAN HAIR</span>
                            <span class="second-line">CLIP-IN EXTENSIONS</span>
                        </h3>
                        <div class="main-product-subtitle">Easy Clip-in Extensions</div>
                        <a href="product.php#product4" class="main-product-btn">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- Hero Banner Section -->
        <!-- Hero Banner Section -->
 <section class="hero-banner-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <h1>RioHairCo,</h1>
                <div class="tagline">Processors and Exporters<br>
                    <small>(Transformateurs et exportateurs)<br>
                    (Trasformatori ed esportatori)<br>
                    (Verarbeiter und Exporteure)</small>
                </div>
                <div class="highlight mb-4">Ethically sourced human hair for global extension users<br>
                    <small>(Cheveux humains d'origine éthique pour les utilisateurs d'extensions mondiales)<br>
                    (Capelli umani ottenuti eticamente per utenti globali di extension)<br>
                    (Ethisch gewonnenes menschliches Haar für globale Extension-Nutzer)</small>
                </div>
                <a href="product.php" class="btn btn-hero">Explore our Products</a>
            </div>
        </div>
    </div>
</section>
        <style>
            /* Add to your hero-banner-section CSS */
    .hero-banner-section .tagline small,
    .hero-banner-section .highlight small {
        font-size: 0.7em;
        display: block;
        line-height: 1.4;
        margin-top: 0.2rem;
        opacity: 0.9;
    }

    .hero-banner-section .tagline {
        font-size: 1.8rem;
        color: var(--secondary-color);
        margin-bottom: 1rem;
        font-weight: 500;
    }

    .hero-banner-section .highlight {
        font-size: 1.3rem;
        margin-bottom: 2rem;
        font-weight: 300;
        letter-spacing: 0.5px;
    }

    @media (max-width: 768px) {
        .hero-banner-section .tagline {
            font-size: 1.4rem;
        }
        
        .hero-banner-section .highlight {
            font-size: 1.1rem;
        }
        
        .hero-banner-section .tagline small,
        .hero-banner-section .highlight small {
            font-size: 0.6em;
        }
    }
        </style>

        <!-- About Section -->
        <section class="about-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h2 class="section-title">About RioHairCo.</h2>
                        <p>RioHairCo. is a premier processor and exporter of 100% natural human hair, serving clients worldwide with the highest quality products. With decades of experience in the industry, we have perfected the art of hair processing while maintaining the natural integrity and beauty of each strand.</p>
                        <p>Our commitment to excellence and ethical sourcing has made us a trusted partner for salons, distributors, and beauty professionals across the globe. We combine traditional craftsmanship with modern techniques to deliver hair extensions that are luxurious, durable, and indistinguishable from natural hair.</p>
                        <p>Every batch of hair undergoes rigorous quality control to ensure consistency, texture, and color perfection. We take pride in our role as a bridge between ethical sources and global beauty markets.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img src="/images/about.png" alt="RIO HAIR Processing Facility">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Image Section -->
        <section class="image-section">
            <div class="container">
                <!-- Main Products Title -->
                <div class="text-center mb-5">
                    <h1 class="section-title">Our Products</h1>
                    <p class="subtitle">Premium Quality Hair Extensions & Accessories</p>
                </div>
        <!-- Fourth Section - Natural Hair (SWAPPED TO BE LAST) -->
                <div class="category-section mb-5">
                    <h2 class="section-title">100% Natural Hair - Bulk</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-6 mb-4">
                            <div class="image-container">
                                <img src="/images/0.jpg" alt="Natural Human Hair Collection" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="image-container">
                                <img src="/images/10.jpg" alt="Hair Quality Inspection" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="contact.php" class="btn btn-danger btn-lg">
                            Enquire / Buy Now
                        </a>
                    </div>
                </div>
                <!-- First Section - Clip Extensions (SWAPPED TO BE FIRST) -->
                    <div class="category-section mb-5">
                    <h2 class="section-title">Blonde </h2>
                    <div class="row justify-content-center">
                        <div class="col-md-6 mb-4">
                            <div class="image-container">
                                <img src="/images/3.jpg" alt="Blonde Style 1" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="image-container">
                                <img src="/images/pony.png" alt="Blonde Style 2" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="contact.php" class="btn btn-danger btn-lg">
                            Enquire / Buy Now
                        </a>
                    </div>
                </div>

                <!-- Second Section - Weaves -->
                <div class="category-section mb-5">
                    <h2 class="section-title">Weaves (Weft)</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-6 mb-4">
                            <div class="image-container">
                                <img src="/images/1.jpg" alt="Weave Style 1" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="image-container">
                                <img src="/images/2.jpg" alt="Weave Style 2" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="contact.php" class="btn btn-danger btn-lg">
                            Enquire / Buy Now
                        </a>
                    </div>
                </div>

                <!-- Third Section - Blonde -->


                <div class="category-section mb-5">
                    <h2 class="section-title">Clip In Extensions </h2>
                    <div class="row justify-content-center">
                        <div class="col-md-6 mb-4">
                            <div class="image-container">
                                <img src="/images/4.jpg" alt="Clip Extension Style 1" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="image-container">
                                <img src="/images/11.jpg" alt="Clip Extension Style 2" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="contact.php" class="btn btn-danger btn-lg">
                            Enquire / Buy Now
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Production Process Section -->
        <section class="production-process-section py-5">
            <div class="container">
                <h2 class="section-title text-center mb-5">Our Production Process</h2>
                
                <div class="row">
                    <!-- Process 1 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="process-card text-center">
                            <div class="process-icon mb-3">
                                <span class="emoji-icon">🧵</span>
                            </div>
                            <div class="image-container mb-3">
                                <img src="/images/8.jpg" alt="Hair Sorting & Initial Processing" class="img-fluid rounded">
                            </div>
                            <h4>Hair Sorting & Initial Processing</h4>
                            <p>Carefully sorted natural human hair is prepared at our facility to ensure uniformity and premium quality.</p>
                        </div>
                    </div>
                    
                    <!-- Process 2 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="process-card text-center">
                            <div class="process-icon mb-3">
                                <span class="emoji-icon">🚿</span>
                            </div>
                            <div class="image-container mb-3">
                                <img src="/images/6.jpg" alt="Washing & Deep Cleansing" class="img-fluid rounded">
                            </div>
                            <h4>Washing & Deep Cleansing</h4>
                            <p>Hair is thoroughly washed and cleansed using controlled methods to preserve its natural texture and strength.</p>
                        </div>
                    </div>
                    
                    <!-- Process 3 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="process-card text-center">
                            <div class="process-icon mb-3">
                                <span class="emoji-icon">🪡</span>
                            </div>
                            <div class="image-container mb-3">
                                <img src="/images/7.jpg" alt="Stitching & Machine Processing" class="img-fluid rounded">
                            </div>
                            <h4>Stitching & Machine Processing</h4>
                            <p>Skilled technicians use precision machinery to stitch and process hair with consistency and durability.</p>
                        </div>
                    </div>
                    
                    <!-- Process 4 -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="process-card text-center">
                            <div class="process-icon mb-3">
                                <span class="emoji-icon">👩‍🏭</span>
                            </div>
                            <div class="image-container mb-3">
                                <img src="/images/5.jpg" alt="Final Inspection & Quality Control" class="img-fluid rounded">
                            </div>
                            <h4>Final Inspection & Quality Control</h4>
                            <p>Each bundle undergoes detailed inspection to meet international quality and export standards.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="why-choose-section">
            <div class="container">
                <h2 class="section-title">Why Choose RioHairCo.</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <h4>Premium Quality</h4>
                            <p>We maintain the highest standards in hair processing. Each strand is carefully selected, cleaned, and processed to preserve its natural cuticle alignment and strength.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <h4>100% Natural Hair</h4>
                            <p>All our hair is 100% natural human hair, ethically sourced. We never use synthetic mixtures, ensuring our products offer the most natural look and feel possible.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <h4>Global Export Standards</h4>
                            <p>We meet international export standards and regulations. Our packaging and documentation ensure smooth customs clearance and delivery to clients worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="cta-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="section-title">Ready to Experience Premium Hair?</h2>
                        <p>Join hundreds of satisfied clients worldwide who trust RioHairCo. for their premium human hair needs. Contact us today for wholesale inquiries or to request samples.</p>
                        <a href="contact.php" class="btn btn-cta">Get in Touch</a>
                    </div>
                </div>
            </div>
        </section>

<?php include_once 'includes/footer.php'; ?>