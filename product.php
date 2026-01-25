<?php 
$pageTitle = "Products | RIO HAIR | Premium Human Hair Extensions";
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
        
        /* Page Header */
        .page-header {
            background: linear-gradient(rgba(59, 47, 47, 0.85), rgba(59, 47, 47, 0.9));
            background-size: cover;
            background-position: center;
            color: white;
            padding: 7rem 0 4rem;
            text-align: center;
        }
        
        .page-header h1 {
            color: white;
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        
        /* Products Section */
        .products-section {
            padding: 3rem 0;
        }
        
        /* Product Container */
        .product-container {
            margin-bottom: 5rem;
        }
        
        /* Product Title - Left Side */
        .product-main-title {
            font-size: 2.8rem;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 3px solid var(--secondary-color);
            position: relative;
        }
        
        .product-main-title:after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 100px;
            height: 3px;
            background-color: var(--secondary-color);
        }
        
        /* Image Slider */
        .product-slider-container {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            height: 500px;
            background-color: #f5f1eb;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .product-slider {
            height: 100%;
            width: 100%;
            position: relative;
        }
        
        .slider-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
        }
        
        .slider-image.active {
            display: block;
        }
        
        .slider-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
            transform: translateY(-50%);
        }
        
        .slider-btn {
            background-color: rgba(59, 47, 47, 0.8);
            border: none;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            color: white;
            font-size: 1.2rem;
        }
        
        .slider-btn:hover {
            background-color: var(--secondary-color);
            transform: scale(1.1);
        }
        
        .slider-dots {
            position: absolute;
            bottom: 15px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        
        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .dot.active {
            background-color: var(--secondary-color);
            transform: scale(1.2);
        }
        
        /* Product Info */
        .product-info {
            padding: 1rem 0;
        }
        
        .product-description-box {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
        }
        
        .specs-table {
            width: 100%;
            margin-bottom: 2rem;
            border-collapse: collapse;
        }
        
        .specs-table tr {
            border-bottom: 1px solid #eee;
        }
        
        .specs-table tr:last-child {
            border-bottom: none;
        }
        
        .specs-table td {
            padding: 1rem 0;
            vertical-align: top;
        }
        
        .specs-table td:first-child {
            font-weight: 600;
            color: var(--primary-color);
            width: 35%;
        }
        
        .specs-table td:last-child {
            color: #555;
        }
        
        /* How to Buy Section */
        .how-to-buy {
            margin: 2rem 0;
            padding-top: 1.5rem;
            border-top: 2px solid #eee;
        }
        
        .how-to-buy h4 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }
        
        .contact-btn {
            background-color: var(--secondary-color);
            border: none;
            color: white;
            padding: 1rem 3rem;
            font-weight: 600;
            border-radius: 4px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }
        
        .contact-btn:hover {
            background-color: var(--button-hover);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(201, 162, 77, 0.3);
        }
        
        .image-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f0f0f0;
            color: #999;
            font-size: 1.1rem;
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
        
        /* Responsive */
        @media (max-width: 992px) {
            .product-slider-container {
                height: 400px;
            }
            
            .product-main-title {
                font-size: 2.3rem;
            }
        }
        
        @media (max-width: 768px) {
            .page-header {
                padding: 5rem 0 2rem;
            }
            
            .page-header h1 {
                font-size: 2.5rem;
            }
            
            .products-section {
                padding: 2rem 0;
            }
            
            .product-slider-container {
                height: 350px;
                margin-bottom: 2rem;
            }
            
            .product-main-title {
                font-size: 2rem;
                text-align: center;
            }
            
            .product-main-title:after {
                left: 50%;
                transform: translateX(-50%);
            }
        }
        
        @media (max-width: 576px) {
            .page-header h1 {
                font-size: 2rem;
            }
            
            .product-slider-container {
                height: 300px;
            }
            
            .slider-btn {
                width: 35px;
                height: 35px;
                font-size: 1rem;
            }
            
            .product-description-box {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <?php include_once 'includes/navbar.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Our Products</h1>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products-section">
        <div class="container">
            <!-- Product 1: NATURAL HUMAN HAIR - BULK -->
            <div id="product1" class="product-container">
                <h2 class="product-main-title">NATURAL HUMAN HAIR - BULK</h2>
                
                <div class="row">
                    <!-- Image Slider -->
                    <div class="col-md-6 mb-4">
                        <div class="product-slider-container">
                            <div class="product-slider">
                                <!-- Placeholder Images -->
                                <div class="image-placeholder">
                                   
                                    <img src="/images/0.jpg" alt="Natural Hair Image 1" class="slider-image active">
                                    </a>
                                </div>
                                <div class="image-placeholder" style="display: none;">
                                   <img src="/images/32(2).jpg" alt="Natural Hair Image 1" class="slider-image active">
                                    </a>
                                </div>
                                 <div class="image-placeholder" style="display: none;">
                                   <img src="/images/10.jpg" alt="Natural Hair Image 1" class="slider-image active">
                                    </a>
                                </div>
                            </div>
                            
                            <div class="slider-nav">
                                <button class="slider-btn prev-btn">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="slider-btn next-btn">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                            
                            <div class="slider-dots">
                                <span class="dot active" data-index="0"></span>
                                <span class="dot" data-index="1"></span>
                                <span class="dot" data-index="2"></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product Details -->
                    <div class="col-md-6">
                        <div class="product-info">
                            <div class="product-description-box">
                                <table class="specs-table">
                                    <tr>
                                        <td>PRODUCT DESCRIPTION</td>
                                        <td>"Our hair is 100% natural and sourced directly from single donors. The cuticles are perfectly aligned to ensure a vibrant texture and tangle-free experience. It has undergone a rigorous cleaning process to ensure it is absolutely lice-free and odorless." These Hair supplied in 100Gr bundles in Bulk.</td>
                                    </tr>
                                    <tr>
                                        <td>COLORS</td>
                                        <td>"Our hair is available in 100% natural Indian Black and Natural Dark Brown, as well as Golden Blonde (de-pigmented)."</td>
                                    </tr>
                                    <tr>
                                        <td>LENGTHS</td>
                                        <td>"We currently supply hair lengths ranging from 50 cm to 100 cm (20" – 40")."</td>
                                    </tr>
                                </table>
                                
                                <!-- HOW TO BUY Section -->
                                <div class="how-to-buy">
                                    <h4>HOW TO BUY</h4>
                                    <p>Contact us for pricing, samples, and bulk orders.</p>
                                    <div class="text-center">
                                        <a href="contact.php" class="contact-btn">
                                            <i class="fas fa-envelope me-2"></i> Contact us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Product 3: Blonde (Bionde) -->
            <div id="product3" class="product-container">
                <h2 class="product-main-title">BLONDE</h2>
                
                <div class="row">
                    <!-- Image Slider -->
                    <div class="col-md-6 mb-4">
                        <div class="product-slider-container">
                            <div class="product-slider">
                                <!-- Placeholder Images -->
                                <div class="image-placeholder">
                                    <img src="/images/3.jpg" alt="Blonde Hair Image 1" class="slider-image active">
                                </div>
                                <div class="image-placeholder" style="display: none;">
                                   <img src="/images/32(3).jpg" alt="Blonde Hair Image 1" class="slider-image active">
                                </div>
                                   <div class="image-placeholder" style="display: none;">
                                   <img src="/images/pony.png" alt="Blonde Hair Image 1" class="slider-image active">
                                </div>
                              
                            </div>
                            
                            <div class="slider-nav">
                                <button class="slider-btn prev-btn">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="slider-btn next-btn">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                            
                            <div class="slider-dots">
                                <span class="dot active" data-index="0"></span>
                                <span class="dot" data-index="1"></span>
                                <span class="dot" data-index="2"></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product Details -->
                    <div class="col-md-6">
                        <div class="product-info">
                            <div class="product-description-box">
                                <table class="specs-table">
                                    <tr>
                                        <td>PRODUCT DESCRIPTION</td>
                                        <td>"Our blonde hair is made using 100% natural hair sourced from healthy black strands. All hair is de-pigmented at a professional level to achieve a Golden Blonde shade that perfectly matches Color #613. The cuticles are perfectly aligned to ensure a vibrant texture and a tangle-free experience. It undergoes a rigorous cleaning process to ensure it is absolutely lice-free and odorless. This hair is supplied in 100g bulk bundles."</td>
                                    </tr>
                                    <tr>
                                        <td>LENGTHS</td>
                                        <td>"We currently supply hair lengths ranging from 50 cm to 100 cm (20" – 40")."</td>
                                    </tr>
                                </table>
                                
                                <!-- HOW TO BUY Section -->
                                <div class="how-to-buy">
                                    <h4>HOW TO BUY</h4>
                                    <p>Contact us for pricing, samples, and bulk orders.</p>
                                    <div class="text-center">
                                        <a href="contact.php" class="contact-btn">
                                            <i class="fas fa-envelope me-2"></i> Contact us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 2: Weaves (L'extension a tessitura) -->
            <div id="product2" class="product-container">
                <h2 class="product-main-title">WEAVES (WEFT)</h2>
                
                <div class="row">
                    <!-- Image Slider -->
                    <div class="col-md-6 mb-4">
                        <div class="product-slider-container">
                            <div class="product-slider">
                                <!-- Placeholder Images -->
                                <div class="image-placeholder">
                                    <img src="/images/1.jpg" alt="Weaves Image 1" class="slider-image active">
                                </div>
                                <div class="image-placeholder" style="display: none;">
                                    <img src="/images/2.jpg" alt="Weaves Image 2" class="slider-image active">
                                </div>
                              <div class="image-placeholder" style="display: none;">
                                    <img src="/images/32(4).jpg" alt="Weaves Image 2" class="slider-image active">
                                </div>
                            </div>
                            
                            <div class="slider-nav">
                                <button class="slider-btn prev-btn">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="slider-btn next-btn">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                            
                            <div class="slider-dots">
                                <span class="dot active" data-index="0"></span>
                                <span class="dot" data-index="1"></span>
                                <span class="dot" data-index="2"></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product Details -->
                    <div class="col-md-6">
                        <div class="product-info">
                            <div class="product-description-box">
                                <table class="specs-table">
                                    <tr>
                                        <td>WEAVES DESCRIPTION</td>
                                        <td>Our wefts (weaves) are made using 100% natural human hair, available in single or triple-thread machine construction (depending on your order specifications). The cuticles are perfectly aligned to ensure a vibrant texture and a tangle-free experience. The hair undergoes a rigorous cleaning process to ensure it is absolutely lice-free and odorless. We supply this hair in 100g bundles.</td>
                                    </tr>
                                    <tr>
                                        <td>COLORS</td>
                                        <td>"Our hair is available in 100% natural Indian Black and Natural Dark Brown, as well as Golden Blonde (de-pigmented)."</td>
                                    </tr>
                                    <tr>
                                        <td>LENGTHS</td>
                                        <td>"We currently supply hair lengths ranging from 50 cm to 100 cm (20" – 40")."</td>
                                    </tr>
                                </table>
                                
                                <!-- HOW TO BUY Section -->
                                <div class="how-to-buy">
                                    <h4>HOW TO BUY</h4>
                                    <p>Contact us for pricing, samples, and bulk orders.</p>
                                    <div class="text-center">
                                        <a href="contact.php" class="contact-btn">
                                            <i class="fas fa-envelope me-2"></i> Contact us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
           
            
            <!-- Product 4: Clip Extensions (l'extension a clip) -->
            <div id="product4" class="product-container">
                <h2 class="product-main-title">CLIP IN EXTENSIONS</h2>
                
                <div class="row">
                    <!-- Image Slider -->
                    <div class="col-md-6 mb-4">
                        <div class="product-slider-container">
                            <div class="product-slider">
                                <!-- Placeholder Images -->
                                <div class="image-placeholder">
                                   <img src="/images/4.jpg" class="slider-image active">                
                                </div>
                                <div class="image-placeholder" >
                                     <img src="/images/32(1).jpg" class="slider-image active">  
                                </div>
                                  <div class="image-placeholder" >
                                     <img src="/images/11.jpg" class="slider-image active">  
                                </div>
                              
                            </div>
                            
                            <div class="slider-nav">
                                <button class="slider-btn prev-btn">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="slider-btn next-btn">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                            
                            <div class="slider-dots">
                                <span class="dot active" data-index="0"></span>
                                <span class="dot" data-index="1"></span>
                                <span class="dot" data-index="2"></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product Details -->
                    <div class="col-md-6">
                        <div class="product-info">
                            <div class="product-description-box">
                                <table class="specs-table">
                                    <tr>
                                        <td>PRODUCT DESCRIPTION</td>
                                        <td>Our clip-in extensions are handcrafted using the highest quality natural human hair. They are typically made as 3-clip pieces or as full head sets (custom-made). We use our premium bulk hair to create these clip-ins, featuring medium-sized clips for a secure and comfortable fit.</td>
                                    </tr>
                                    <tr>
                                        <td>COLORS</td>
                                        <td>"Our hair is available in 100% natural Indian Black and Natural Dark Brown, as well as Golden Blonde (de-pigmented)."</td>
                                    </tr>
                                    <tr>
                                        <td>LENGTHS</td>
                                        <td>"We currently supply hair lengths ranging from 50 cm to 100 cm (20" – 40")."</td>
                                    </tr>
                                </table>
                                
                                <!-- HOW TO BUY Section -->
                                <div class="how-to-buy">
                                    <h4>HOW TO BUY</h4>
                                    <p>Contact us for pricing, samples, and bulk orders.</p>
                                    <div class="text-center">
                                        <a href="contact.php" class="contact-btn">
                                            <i class="fas fa-envelope me-2"></i> Contact us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include_once 'includes/footer.php'; ?>
    
    <script>
 

        // Image Slider Functionality for each product
        document.addEventListener('DOMContentLoaded', function() {
            const productContainers = document.querySelectorAll('.product-container');
            
            productContainers.forEach(container => {
                const slider = container.querySelector('.product-slider');
                const images = slider.querySelectorAll('.image-placeholder');
                const dots = container.querySelectorAll('.slider-dots .dot');
                const prevBtn = container.querySelector('.prev-btn');
                const nextBtn = container.querySelector('.next-btn');
                let currentIndex = 0;

                function showImage(index) {
                    // Hide all images
                    images.forEach(img => img.style.display = 'none');
                    dots.forEach(dot => dot.classList.remove('active'));
                    
                    // Show the selected image
                    images[index].style.display = 'flex';
                    dots[index].classList.add('active');
                    currentIndex = index;
                }

                function nextImage() {
                    let nextIndex = (currentIndex + 1) % images.length;
                    showImage(nextIndex);
                }

                function prevImage() {
                    let prevIndex = (currentIndex - 1 + images.length) % images.length;
                    showImage(prevIndex);
                }

                // Next/Prev button events
                if (nextBtn) nextBtn.addEventListener('click', nextImage);
                if (prevBtn) prevBtn.addEventListener('click', prevImage);

                // Dot click events
                dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => {
                        showImage(index);
                    });
                });

                // Auto-slide every 5 seconds
                setInterval(nextImage, 5000);

                // Initialize first image
                showImage(0);
            });
        });
    </script>
</body>
</html>