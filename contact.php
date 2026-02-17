<?php 
// ADD THIS AT THE VERY TOP OF THE FILE
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Collect form data
    $firstName = $_POST['firstName'] ?? '';
    $lastName = $_POST['lastName'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $company = $_POST['company'] ?? '';
    $inquiryType = $_POST['inquiryType'] ?? '';
    $message = $_POST['message'] ?? '';
    
    // Get inquiry type text
    $inquiryTypes = [
        'wholesale' => 'Wholesale Inquiry',
        'sample' => 'Sample Request',
        'product' => 'Product Information',
        'distribution' => 'Distribution Partnership',
        'general' => 'General Question'
    ];
    
    $inquiryText = $inquiryTypes[$inquiryType] ?? 'General Question';
    
    // Email settings
    $to = "info@riohairco.com";
    $subject = "New Contact Form: " . $inquiryText . " - " . $firstName . " " . $lastName;
    
    // Email content
    $emailContent = "NEW CONTACT FORM SUBMISSION\n";
    $emailContent .= "================================\n\n";
    $emailContent .= "CONTACT INFORMATION:\n";
    $emailContent .= "Name: $firstName $lastName\n";
    $emailContent .= "Email: $email\n";
    $emailContent .= "Phone: " . ($phone ?: 'Not provided') . "\n";
    $emailContent .= "Company: " . ($company ?: 'Not provided') . "\n\n";
    $emailContent .= "INQUIRY DETAILS:\n";
    $emailContent .= "Type: $inquiryText\n\n";
    $emailContent .= "MESSAGE:\n";
    $emailContent .= "$message\n\n";
    $emailContent .= "================================\n";
    $emailContent .= "Sent from RioHairCo Contact Form\n";
    $emailContent .= "Date: " . date('Y-m-d H:i:s');
    
    // Send email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if (mail($to, $subject, $emailContent, $headers)) {
        $formSuccess = true;
    } else {
        $formError = true;
    }
}

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
                    <p>RioHairCo. is a leading processor and exporter of natural human hair with <strong>26 years of experience</strong> in the industry, operating from India and Brazil. Our products primarily serve clients in Brazil, Europe, Canada, and the Middle East.</p>
                    
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
                             (+91) 79974 93487 
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
                             +55-41-99113-5570
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
                        
                        <?php if (isset($formSuccess)): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i>
                            Thank you! Your message has been sent successfully. We will contact you soon.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php endif; ?>
                        
                        <?php if (isset($formError)): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            Sorry, there was an error sending your message. Please try again or contact us directly.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php endif; ?>
                        
                        <!-- FORM CHANGED HERE: added method="POST" -->
                        <form id="contactForm" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="firstName" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="lastName" placeholder="Last Name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="company" placeholder="Company Name (Optional)">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="inquiryType" required>
                                    <option value="">Select Inquiry Type</option>
                                    <option value="wholesale">Wholesale Inquiry</option>
                                    <option value="sample">Sample Request</option>
                                    <option value="product">Product Information</option>
                                    <option value="distribution">Distribution Partnership</option>
                                    <option value="general">General Question</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Your Message" required></textarea>
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
