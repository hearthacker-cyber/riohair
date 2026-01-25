<?php 
$pageTitle = "Contact Us | RIO HAIR | Premium Human Hair Processors & Exporters";
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
        
        /* Language Selector in Navbar */
        .language-selector {
            position: relative;
        }
        
        .language-btn {
            background: none;
            border: none;
            color: var(--primary-color) !important;
            font-weight: 500;
            display: flex;
            align-items: center;
            padding: 0.5rem 1rem;
            cursor: pointer;
        }
        
        .language-btn i {
            margin-right: 5px;
        }
        
        .language-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            background: white;
            min-width: 150px;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
            display: none;
            z-index: 1000;
        }
        
        .language-dropdown.show {
            display: block;
        }
        
        .language-option {
            padding: 8px 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            color: var(--primary-color);
            display: flex;
            align-items: center;
        }
        
        .language-option:hover {
            background-color: #f5f1eb;
            color: var(--secondary-color);
        }
        
        .language-option.active {
            background-color: rgba(201, 162, 77, 0.1);
            color: var(--secondary-color);
            font-weight: 500;
        }
        
        .flag-icon {
            width: 20px;
            height: 15px;
            margin-right: 10px;
            border-radius: 2px;
        }
        
        /* Page Header */
        .page-header {
            background: linear-gradient(rgba(59, 47, 47, 0.85), rgba(59, 47, 47, 0.9)), url('/images/contact.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 7rem 0 5rem;
            text-align: center;
        }
        
        .page-header h1 {
            color: white;
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        
        .page-header p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            color: #f0f0f0;
        }
        
        /* About Section */
        .about-section {
            padding: 5rem 0 3rem;
        }
        
        .section-title {
            position: relative;
            padding-bottom: 1rem;
            margin-bottom: 2rem;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 3px;
            background-color: var(--secondary-color);
        }
        
        /* Contact Info Section */
        .contact-info-section {
            padding: 3rem 0 5rem;
            background-color: #f9f7f3;
        }
        
        .contact-info-card {
            background-color: white;
            padding: 2.5rem;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: all 0.3s ease;
            margin-bottom: 2rem;
        }
        
        .contact-info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .country-title {
            color: var(--primary-color);
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--secondary-color);
            display: flex;
            align-items: center;
        }
        
        .country-title i {
            margin-right: 10px;
            color: var(--secondary-color);
        }
        
        .contact-detail {
            margin-bottom: 1rem;
            padding-left: 1.5rem;
            position: relative;
        }
        
        .contact-detail i {
            position: absolute;
            left: 0;
            top: 0.2rem;
            color: var(--secondary-color);
        }
        
        /* Contact Form */
        .contact-form-section {
            padding: 5rem 0;
        }
        
        .contact-form {
            background-color: white;
            padding: 2.5rem;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }
        
        .form-control {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 0.8rem 1rem;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 0.2rem rgba(201, 162, 77, 0.25);
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        .btn-submit {
            background-color: var(--secondary-color);
            color: white;
            border: none;
            padding: 0.8rem 2.5rem;
            font-weight: 600;
            border-radius: 4px;
            transition: all 0.3s ease;
            font-size: 1.1rem;
            width: 100%;
        }
        
        .btn-submit:hover {
            background-color: var(--button-hover);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        /* WhatsApp Button */
        .whatsapp-btn {
            display: inline-flex;
            align-items: center;
            background-color: #25D366;
            color: white;
            padding: 0.6rem 1.5rem;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            margin-top: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .whatsapp-btn:hover {
            background-color: #128C7E;
            color: white;
            transform: translateY(-2px);
        }
        
        .whatsapp-btn i {
            margin-right: 8px;
            font-size: 1.2rem;
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
        
        /* Google Translate Customization */
        #google_translate_element {
            display: none;
        }
        
        .goog-te-gadget {
            font-family: 'Poppins', sans-serif !important;
        }
        
        .goog-te-gadget-simple {
            background-color: transparent !important;
            border: none !important;
            padding: 0 !important;
        }
        
        .goog-te-gadget-simple span {
            color: var(--primary-color) !important;
            font-family: 'Poppins', sans-serif !important;
        }
        
        .goog-te-menu-value {
            display: none !important;
        }
        
        .goog-te-banner-frame {
            display: none !important;
        }
        
        .skiptranslate {
            display: none !important;
        }
        
        body {
            top: 0 !important;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .page-header {
                padding: 5rem 0 3rem;
            }
            
            .page-header h1 {
                font-size: 2.5rem;
            }
            
            .about-section,
            .contact-form-section {
                padding: 3rem 0;
            }
            
            .contact-form {
                padding: 2rem;
            }
            
            .language-dropdown {
                position: fixed;
                top: 60px;
                right: 10px;
                left: 10px;
                width: auto;
            }
        }
        
        @media (max-width: 576px) {
            .page-header h1 {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .country-title {
                font-size: 1.3rem;
            }
        }
        
        /* Not Translated Elements - Prevent Google Translate from translating */
        .notranslate {
            /* These elements won't be translated */
        }
    </style>
</head>
<body>
    Navigation
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
           <a class="navbar-brand notranslate" href="index.php">Rio<span>Hair</span>Co.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact</a>
                    </li>
                 
                    <!-- Language Selector -->
                    <li class="nav-item language-selector">
                        <button class="nav-link language-btn" id="languageBtn">
                            <i class="fas fa-language"></i> English
                        </button>
                        <div class="language-dropdown" id="languageDropdown">
                            <div class="language-option active" data-lang="en">
                                <img src="https://flagcdn.com/w20/gb.png" class="flag-icon" alt="English">
                                English
                            </div>
                            <div class="language-option" data-lang="fr">
                                <img src="https://flagcdn.com/w20/fr.png" class="flag-icon" alt="French">
                                Français
                            </div>
                            <div class="language-option" data-lang="it">
                                <img src="https://flagcdn.com/w20/it.png" class="flag-icon" alt="Italian">
                                Italiano
                            </div>
                            <!-- <div class="language-option" data-lang="pt">
                                <img src="https://flagcdn.com/w20/pt.png" class="flag-icon" alt="Portuguese">
                                Português
                            </div>
                            <div class="language-option" data-lang="es">
                                <img src="https://flagcdn.com/w20/es.png" class="flag-icon" alt="Spanish">
                                Español
                            </div> -->
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Google Translate Element (Hidden) -->
    <div id="google_translate_element"></div>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Contact Us</h1>
            <p>Get in touch with RIO HAIR for wholesale inquiries, samples, or any questions about our premium natural human hair products.</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <h2 class="section-title">About Us</h2>
            <div class="row">
                <div class="col-lg-12">
                    <p>RioHairCo. is a leading processor and exporter of natural human hair with <strong>26 years of experience</strong> in the industry, operating from India and Brazil. Our products primarily serve clients in Brazil, Europe, and the Middle East.</p>
                    
                    <p>The Dubai office manages inventory and oversees exports, ensuring efficient and timely shipping across Europe. We source hair directly from donors in India and selected regions in Amazonas, Brazil, process it at our facilities, and handle all export logistics.</p>
                    
                    <p>For business inquiries, please contact us via email or WhatsApp at any of our regional offices listed below.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="container">
            <h2 class="section-title text-center">Our Global Offices</h2>
            <p class="text-center mb-5" style="max-width: 800px; margin: 0 auto;">Contact the office nearest to you for inquiries, orders, or support.</p>
            
            <div class="row">
                <!-- India Office -->
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card">
                        <h3 class="country-title">
                            <i class="fas fa-map-marker-alt"></i> INDIA
                        </h3>
                        <div class="contact-detail">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email:</strong><br>
                                <a href="mailto:india@riohairco.com">india@riohairco.com</a><br>
                                <a href="mailto:exports@riohairco.com">exports@riohairco.com</a>
                            </div>
                        </div>
                        <div class="contact-detail">
                            <i class="fab fa-whatsapp"></i>
                            <div>
                                <strong>WhatsApp:</strong><br>
                                +91 98410 22567
                            </div>
                        </div>
                        <a href="https://wa.me/919841022567" target="_blank" class="whatsapp-btn">
                            <i class="fab fa-whatsapp"></i> Message on WhatsApp
                        </a>
                    </div>
                </div>
                
                <!-- Dubai Office -->
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card">
                        <h3 class="country-title">
                            <i class="fas fa-map-marker-alt"></i> DUBAI
                        </h3>
                        <div class="contact-detail">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email:</strong><br>
                                <a href="mailto:dubai@riohairco.com">dubai@riohairco.com</a><br>
                                <a href="mailto:exports@riohairco.com">exports@riohairco.com</a>
                            </div>
                        </div>
                        <div class="contact-detail">
                            <i class="fab fa-whatsapp"></i>
                            <div>
                                <strong>WhatsApp:</strong><br>
                                +971 50 4916919
                            </div>
                        </div>
                        <a href="https://wa.me/971504916919" target="_blank" class="whatsapp-btn">
                            <i class="fab fa-whatsapp"></i> Message on WhatsApp
                        </a>
                    </div>
                </div>
                
                <!-- Brazil Office -->
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card">
                        <h3 class="country-title">
                            <i class="fas fa-map-marker-alt"></i> BRASIL
                        </h3>
                        <div class="contact-detail">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email:</strong><br>
                                <a href="mailto:curitiba@riohair.com">curitiba@riohair.com</a><br>
                                <a href="mailto:exports@riohairco.com">exports@riohairco.com</a>
                            </div>
                        </div>
                        <div class="contact-detail">
                            <i class="fab fa-whatsapp"></i>
                            <div>
                                <strong>WhatsApp:</strong><br>
                                +55 234 67879 890
                            </div>
                        </div>
                        <a href="https://wa.me/5523467879890" target="_blank" class="whatsapp-btn">
                            <i class="fab fa-whatsapp"></i> Message on WhatsApp
                        </a>
                    </div>
                </div>
                
                <!-- Canada Office -->
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card">
                        <h3 class="country-title">
                            <i class="fas fa-map-marker-alt"></i> CANADA
                        </h3>
                        <div class="contact-detail">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email:</strong><br>
                                <a href="mailto:montreal@riohairco.com">montreal@riohairco.com</a><br>
                                <a href="mailto:exports@riohairco.com">exports@riohairco.com</a>
                            </div>
                        </div>
                        <div class="contact-detail">
                            <i class="fab fa-whatsapp"></i>
                            <div>
                                <strong>WhatsApp:</strong><br>
                                +001  263-993-4647
                            </div>
                        </div>
                        <a href="https://wa.me/0012639934647" target="_blank" class="whatsapp-btn">
                            <i class="fab fa-whatsapp"></i> Message on WhatsApp
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-lg-8 mx-auto">
                    <div class="contact-info-card text-center">
                        <h3 class="country-title text-center">
                            <i class="fas fa-globe-americas"></i> Global Operations
                        </h3>
                        <p class="mb-0"><strong>Operating Hours:</strong> Monday to Friday, 9:00 AM - 6:00 PM (Local Time)</p>
                        <p class="mb-0"><strong>Response Time:</strong> Within 24 hours during business days</p>
                        <p><strong>Languages:</strong> English, Portuguese, Italian, Spanish, French</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="contact-form">
                        <h2 class="section-title text-center">Send Us a Message</h2>
                        <p class="text-center mb-4">Prefer to send an email directly? Use the form below and we'll respond promptly.</p>
                        
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" id="phone" placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="company" placeholder="Company Name (Optional)">
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="inquiryType" required>
                                    <option value="">Select Inquiry Type</option>
                                    <option value="wholesale">Wholesale Inquiry</option>
                                    <option value="sample">Sample Request</option>
                                    <option value="product">Product Information</option>
                                    <option value="distribution">Distribution Partnership</option>
                                    <option value="general">General Question</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Your Message" required></textarea>
                            </div>
                            <button type="submit" class="btn-submit mt-3">
                                <i class="fas fa-paper-plane me-2"></i> Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once 'includes/footer.php'; ?>
    <!-- Load Google Translate Script -->
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
    <script>
        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
                navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.98)';
                navbar.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.1)';
            } else {
                navbar.classList.remove('navbar-scrolled');
                navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
                navbar.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.05)';
            }
        });

        // Contact Form Submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const firstName = document.getElementById('firstName').value;
            const email = document.getElementById('email').value;
            const inquiryType = document.getElementById('inquiryType').value;
            const message = document.getElementById('message').value;
            
            // Simple validation
            if (firstName && email && inquiryType && message) {
                // In a real application, you would send this data to a server
                // For now, we'll just show an alert
                alert('Thank you, ' + firstName + '! Your ' + inquiryType + ' inquiry has been sent. We will contact you at ' + email + ' shortly.');
                
                // Reset form
                document.getElementById('contactForm').reset();
            } else {
                alert('Please fill in all required fields.');
            }
        });

        // Language Selector Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const languageBtn = document.getElementById('languageBtn');
            const languageDropdown = document.getElementById('languageDropdown');
            const languageOptions = document.querySelectorAll('.language-option');
            
            // Toggle dropdown
            languageBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                languageDropdown.classList.toggle('show');
            });
            
            // Handle language selection
            languageOptions.forEach(option => {
                option.addEventListener('click', function() {
                    const lang = this.getAttribute('data-lang');
                    const languageName = this.textContent.trim();
                    
                    // Update active state
                    languageOptions.forEach(opt => opt.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Update button text
                    languageBtn.innerHTML = `<i class="fas fa-language"></i> ${languageName}`;
                    
                    // Change Google Translate language
                    changeGoogleLanguage(lang);
                    
                    // Close dropdown
                    languageDropdown.classList.remove('show');
                    
                    // Store language preference in localStorage
                    localStorage.setItem('preferredLanguage', lang);
                });
            });
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function() {
                languageDropdown.classList.remove('show');
            });
            
            // Function to change Google Translate language
            function changeGoogleLanguage(lang) {
                // Wait for Google Translate to load
                setTimeout(function() {
                    var select = document.querySelector('.goog-te-combo');
                    if (select) {
                        select.value = lang;
                        select.dispatchEvent(new Event('change'));
                        
                        // Also trigger the Google Translate API directly
                        if (typeof google !== 'undefined' && google.translate) {
                            google.translate.translatePage('en', lang);
                        }
                    } else {
                        // Try again after a delay if select not found
                        setTimeout(function() {
                            var select = document.querySelector('.goog-te-combo');
                            if (select) {
                                select.value = lang;
                                select.dispatchEvent(new Event('change'));
                            }
                        }, 1000);
                    }
                }, 500);
            }
            
            // Load preferred language from localStorage
            const preferredLanguage = localStorage.getItem('preferredLanguage');
            if (preferredLanguage) {
                // Find and activate the language option
                languageOptions.forEach(option => {
                    if (option.getAttribute('data-lang') === preferredLanguage) {
                        option.classList.add('active');
                        const languageName = option.textContent.trim();
                        languageBtn.innerHTML = `<i class="fas fa-language"></i> ${languageName}`;
                        
                        // Change language after page loads
                        setTimeout(() => {
                            changeGoogleLanguage(preferredLanguage);
                        }, 2000);
                    } else {
                        option.classList.remove('active');
                    }
                });
            }
            
            // Hide Google Translate banner and fix body position
            setTimeout(function() {
                // Remove Google Translate banner
                var banner = document.querySelector('.goog-te-banner-frame');
                if (banner) {
                    banner.style.display = 'none';
                }
                
                // Fix body position
                document.body.style.top = '0';
                
                // Hide "Powered by Google" text
                var poweredBy = document.querySelector('.goog-logo-link');
                if (poweredBy) {
                    poweredBy.style.display = 'none';
                }
                
                // Remove "Powered by" text
                var gadget = document.querySelector('.goog-te-gadget');
                if (gadget) {
                    var textNodes = gadget.childNodes;
                    for (var i = 0; i < textNodes.length; i++) {
                        if (textNodes[i].nodeType === 3) { // Text node
                            if (textNodes[i].textContent.includes('Powere   d by')) {
                                gadget.removeChild(textNodes[i]);
                                break;
                            }
                        }
                    }
                }
            }, 2000);
            
            // Prevent translation of specific elements
            const notTranslateElements = document.querySelectorAll('.notranslate, input, textarea, select, .country-title, .contact-detail');
            notTranslateElements.forEach(el => {
                el.classList.add('notranslate');
            });
        });
    </script>
</body>
</html>