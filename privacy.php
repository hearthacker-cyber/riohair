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
            background: linear-gradient(rgba(59, 47, 47, 0.85), rgba(59, 47, 47, 0.9)), url('https://images.unsplash.com/photo-1605497788044-5a32c7078486?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
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
        
        /* Privacy Policy Content */
        .privacy-content {
            padding: 5rem 0;
        }
        
        .privacy-section {
            margin-bottom: 3rem;
        }
        
        .privacy-title {
            position: relative;
            padding-bottom: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .privacy-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: var(--secondary-color);
        }
        
        .toc-list {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
        }
        
        .toc-list ol {
            padding-left: 1.5rem;
        }
        
        .toc-list li {
            margin-bottom: 0.5rem;
        }
        
        .toc-list a {
            color: var(--primary-color);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .toc-list a:hover {
            color: var(--secondary-color);
            padding-left: 5px;
        }
        
        .info-box {
            background-color: #f9f7f3;
            padding: 1.5rem;
            border-radius: 8px;
            border-left: 4px solid var(--secondary-color);
            margin: 1.5rem 0;
        }
        
        .privacy-content ul, .privacy-content ol {
            padding-left: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .privacy-content li {
            margin-bottom: 0.5rem;
        }
        
        /* Contact Info */
        .contact-section {
            background-color: #f9f7f3;
            padding: 3rem;
            border-radius: 8px;
            margin-top: 3rem;
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
            
            .privacy-content {
                padding: 3rem 0;
            }
            
            .contact-section {
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
            
            .privacy-title {
                font-size: 1.5rem;
            }
        }
        
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: var(--secondary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
        }
        
        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background-color: var(--button-hover);
            transform: translateY(-3px);
        }
        
        /* Not Translated Elements */
        .notranslate {
            /* These elements won't be translated */
        }
    </style>
</head>
<body>
    <!-- Google Translate Element (Hidden) -->
    <div id="google_translate_element"></div>


    <!-- Navigation -->
   
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Privacy Policy</h1>
            <p>Your privacy is important to us. Learn how we collect, use, and protect your personal information.</p>
        </div>
    </section>

    <!-- Privacy Policy Content -->
    <section class="privacy-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Effective Date Notice -->
                    <div class="info-box">
                        <h4><i class="fas fa-calendar-alt me-2"></i> Effective Date</h4>
                        <p class="mb-0">This Privacy Policy is effective as of <strong>January 2026</strong>.</p>
                    </div>
                    
                    <p>RIO HAIR Co. by RIO INTERNATIONAL respects the privacy interests of our website visitors. This Privacy Policy describes the types of personal information that we collect, the uses we make of that information, and how you can correct or request deletion of any personal identifying information you choose to give us.</p>
                    
                    <!-- Table of Contents -->
                    <div class="toc-list">
                        <h3 class="privacy-title">Table of Contents</h3>
                        <ol>
                            <li><a href="#section1">Personal Information We Collect</a></li>
                            <li><a href="#section2">How We Collect Personal Information</a></li>
                            <li><a href="#section3">How We Use Your Personal Information</a></li>
                            <li><a href="#section4">How We Share Your Personal Information</a></li>
                            <li><a href="#section5">Your Choices</a></li>
                            <li><a href="#section6">Your California Privacy Rights</a></li>
                            <li><a href="#section7">Your European Privacy Rights</a></li>
                            <li><a href="#section8">International Data Transfers</a></li>
                            <li><a href="#section9">Third Party Links and Websites</a></li>
                            <li><a href="#section10">Security Practices</a></li>
                            <li><a href="#section11">Children</a></li>
                            <li><a href="#section12">Changes to this Privacy Policy</a></li>
                            <li><a href="#section13">How to Contact Us</a></li>
                        </ol>
                    </div>
                    
                    <!-- Section 1 -->
                    <div id="section1" class="privacy-section">
                        <h3 class="privacy-title">1. PERSONAL INFORMATION WE COLLECT</h3>
                        <p>RIO HAIR Co. (and the vendors we hire to perform business functions on our behalf) may collect, receive, and develop the following categories of personal information:</p>
                        <ul>
                            <li><strong>Contact Information</strong>, such as your first and last name, email and mailing addresses, phone number, professional title, and company name.</li>
                            <li><strong>Account/Registration Information</strong>, such as your username and password, order history, and preferences when using products or services.</li>
                            <li><strong>Demographic Information</strong>, such as your age, gender, and income.</li>
                            <li><strong>Information About Others</strong> for whom you purchase an item or gift, such as name, delivery address, and phone number.</li>
                            <li><strong>Correspondence Information</strong>, such as information you provide when you contact us with questions, feedback, survey responses, or otherwise communicate with us.</li>
                            <li><strong>Payment Information</strong>, such as your credit card or debit card number, expiration date, card verification number, and billing address if you make a purchase.</li>
                            <li><strong>Internet and Network Activity Information</strong>, such as your IP address, device identifiers, websites you came from, websites you leave to, and website interaction information (e.g., search terms entered, and products or content viewed or clicked on).</li>
                            <li><strong>Other Information</strong> that we may collect which is not specifically listed here, but which we will use in accordance with this Privacy Policy or as otherwise disclosed at the time of collection.</li>
                        </ul>
                    </div>
                    
                    <!-- Section 2 -->
                    <div id="section2" class="privacy-section">
                        <h3 class="privacy-title">2. HOW WE COLLECT PERSONAL INFORMATION</h3>
                        <p>We collect and obtain personal information:</p>
                        <ul>
                            <li><strong>From you.</strong> We collect personal information when it is provided to us, such as when you send an email to us, refer friends or others to contact us, or connect with us on social media or through one of our partners. For example, you may see a "Log in with..." button, which means we request personal information from a partner to streamline the login process.</li>
                            <li><strong>From your device.</strong> We use tracking tools like cookies and similar technologies to automatically collect information about you (e.g., Internet and Network Activity Information). We collect this information when you interact with our website.</li>
                            <li><strong>From third party service providers.</strong> We work with third party service providers who collect information on our behalf in order to provide services to us.</li>
                            <li><strong>From other sources.</strong> Other parties may give us personal information about you. These other parties might include social media platforms that give us information they have collected either directly or indirectly from you.</li>
                        </ul>
                    </div>
                    
                    <!-- Section 3 -->
                    <div id="section3" class="privacy-section">
                        <h3 class="privacy-title">3. HOW WE USE YOUR PERSONAL INFORMATION</h3>
                        <p>We share these categories of personal information under the following circumstances:</p>
                        <ul>
                            <li><strong>To administer our website and services and for internal operations.</strong> For this purpose, we typically use all categories of personal information for our internal operations.</li>
                            <li><strong>To process your transactions and fulfill your orders.</strong> For this purpose, we typically use Contact Information, Account/Registration Information, Payment Information, and Internet and Network Activity Information.</li>
                            <li><strong>To respond to your requests or questions.</strong> For this purpose, we typically use Contact Information to contact you in response to your feedback.</li>
                            <li><strong>To improve our products and services.</strong> For this purpose, we may use the information you provide about our products to make our website, services, and products better.</li>
                            <li><strong>To send you RIO HAIR Co. newsletters and for other marketing purposes.</strong> For this purpose, we typically use Contact Information when you sign-up for RIO HAIR Co. VIP to send you our newsletters, as well as special offers and promotions.</li>
                            <li><strong>For interest-based advertising.</strong> For this purpose, we may contract with third-party advertising companies and social media companies to display ads on our website and other websites.</li>
                            <li><strong>For security purposes.</strong> For this purpose, we typically use Internet and Network Activity Information or other categories of personal information as necessary to protect our company, our customers, and our business partners.</li>
                            <li><strong>To comply with laws and regulations.</strong> For this purpose, we typically use your personal information as we believe necessary or appropriate to comply with applicable laws.</li>
                            <li><strong>To verify requests made pursuant to this Privacy Policy.</strong> We may use certain pieces of personal information to verify your identity if you make requests pursuant to this Privacy Policy.</li>
                            <li><strong>With your consent.</strong> In some cases we may specifically ask for your consent to collect, use, or share your personal information.</li>
                        </ul>
                    </div>
                    
                    <!-- Section 4 -->
                    <div id="section4" class="privacy-section">
                        <h3 class="privacy-title">4. HOW WE SHARE YOUR PERSONAL INFORMATION</h3>
                        <p>We share your personal information as follows:</p>
                        <ul>
                            <li><strong>Affiliates.</strong> We may share your personal information with affiliates.</li>
                            <li><strong>Service providers.</strong> We may share each category of personal information with companies and individuals that provide services on our behalf.</li>
                            <li><strong>Advertising and marketing partners.</strong> We might share the above categories of personal information with companies that help us with our marketing efforts.</li>
                            <li><strong>Law enforcement, government authorities, and private parties.</strong> We may share the above categories of personal information as we believe in good faith to be necessary or appropriate to comply with law.</li>
                            <li><strong>Organizations in connection with a business transfer.</strong> We will share your personal information if we are acquired by or enter into a merger with another company.</li>
                        </ul>
                    </div>
                    
                    <!-- Section 5 -->
                    <div id="section5" class="privacy-section">
                        <h3 class="privacy-title">5. YOUR CHOICES</h3>
                        <p>You have certain choices about how we use your personal information:</p>
                        <ul>
                            <li><strong>Access or update your account information.</strong> If you have registered for an account with us, you may review and update certain personal information in your account profile by logging into the account.</li>
                            <li><strong>Opt out of marketing communications.</strong> To stop receiving our newsletter or other promotional emails, use the unsubscribe link at the bottom of each message or email us at support@riohairco.com.</li>
                        </ul>
                        
                        <h5>Cookies</h5>
                        <p>You can control certain cookies and tracking tools. We use the following types of cookies:</p>
                        <ul>
                            <li><strong>Strictly necessary cookies.</strong> These are cookies that are required for the operation of our website.</li>
                            <li><strong>Analytical cookies.</strong> These cookies allow us to recognize and count the number of visitors and to see how visitors move around our website when they are using it.</li>
                            <li><strong>Advertising or targeting cookies.</strong> These cookies are used to make advertising more relevant to you and your interests.</li>
                        </ul>
                        
                        <div class="info-box">
                            <h5><i class="fas fa-info-circle me-2"></i> Cookie Management</h5>
                            <p>You may disable cookies by activating the setting on your browser that allows you to refuse the setting of all or some cookies. However, if you use your browser settings to disable all cookies (including strictly necessary cookies) you may not be able to access all or parts of the website.</p>
                            <p class="mb-0">To learn more about Google Analytics and how to opt out, visit: <a href="https://tools.google.com/dlpage/gaoptout" target="_blank">https://tools.google.com/dlpage/gaoptout</a></p>
                        </div>
                        
                        <p><strong>Do Not Track:</strong> We currently do not respond to browser-based "Do Not Track" or similar signals. To find out more about "Do Not Track," please visit <a href="http://www.allaboutdnt.com" target="_blank">http://www.allaboutdnt.com</a>.</p>
                    </div>
                    
                    <!-- Section 6 -->
                    <div id="section6" class="privacy-section">
                        <h3 class="privacy-title">6. YOUR CALIFORNIA PRIVACY RIGHTS</h3>
                        <p>If you reside in California, you have the right to ask us one time each year if we have shared personal information with third parties for their direct marketing purposes. To make a request, please send an email to support@riohairco.com with "Shine the Light" in the subject line.</p>
                        
                        <p>If you reside in California, you have the right to make the following requests with respect to your personal information:</p>
                        <ul>
                            <li><strong>Access.</strong> You have the right to request that we disclose to you the categories of personal information collected about you.</li>
                            <li><strong>Deletion.</strong> You can request that we delete your personal information that we maintain about you, subject to certain exceptions.</li>
                            <li><strong>Right to be free from discrimination.</strong> You have the right not to be discriminated against for exercising these rights.</li>
                        </ul>
                        
                        <p><strong>Note:</strong> We do not sell your personal information.</p>
                        
                        <div class="info-box">
                            <p>You may exercise the above rights by sending an email to <a href="mailto:support@riohairco.com">support@riohairco.com</a>.</p>
                        </div>
                    </div>
                    
                    <!-- Section 7 -->
                    <div id="section7" class="privacy-section">
                        <h3 class="privacy-title">7. YOUR EUROPEAN PRIVACY RIGHTS</h3>
                        <p>You have the following rights, where provided under applicable law, including the European Union's General Data Protection Regulation (GDPR), regarding your information:</p>
                        <ul>
                            <li><strong>Information:</strong> You have the right to receive confirmation as to whether or not we are processing your personal information.</li>
                            <li><strong>Access:</strong> You have the right to access to your personal information.</li>
                            <li><strong>Correct:</strong> You are entitled to update or correct your information if it is inaccurate or incomplete.</li>
                            <li><strong>Delete:</strong> At your request, we will delete your personal information if any "right to be forgotten" conditions apply.</li>
                            <li><strong>Transfer:</strong> You have rights to obtain and reuse your personal information for your own purposes.</li>
                            <li><strong>Restrict:</strong> You have the right to restrict our processing of personal information.</li>
                            <li><strong>Object:</strong> You have the right to object to certain types of processing.</li>
                        </ul>
                        
                        <div class="info-box">
                            <h5><i class="fas fa-envelope me-2"></i> Contact for European Privacy Rights</h5>
                            <p>You may exercise your rights by writing to us at:</p>
                            <p class="mb-0"><strong>Email:</strong> <a href="mailto:support@riohairco.com">support@riohairco.com</a></p>
                            <p class="mb-0"><strong>Mail:</strong> RIO HAIR Co by RIO INTERNATIONAL<br>
                            128,129 A.R. Street, Janaki Nagar, Chennai 600087, INDIA</p>
                        </div>
                    </div>
                    
                    <!-- Section 8 -->
                    <div id="section8" class="privacy-section">
                        <h3 class="privacy-title">8. INTERNATIONAL DATA TRANSFERS</h3>
                        <p>RIO HAIR Co. is headquartered in INDIA and may have service providers in other countries. Your personal information may be transferred to the United States or other locations outside of your state, province, country, or other governmental jurisdiction where privacy laws may not be as comprehensive as those in your jurisdiction.</p>
                    </div>
                    
                    <!-- Section 9 -->
                    <div id="section9" class="privacy-section">
                        <h3 class="privacy-title">9. THIRD PARTY LINKS AND WEBSITES</h3>
                        <p>Our website and some of our email communications contain links to other websites that we are not responsible for. We do not control, recommend or endorse these other websites. These other websites may also collect your personal information, and they may have their own privacy policies. We recommend that you review the privacy policy of any website that you access through this website.</p>
                    </div>
                    
                    <!-- Section 10 -->
                    <div id="section10" class="privacy-section">
                        <h3 class="privacy-title">10. SECURITY PRACTICES</h3>
                        <p>The security of your personal information is important to us. Please be aware that despite our best efforts, no data security measures can guarantee 100% security. While we strive to protect information transmitted on or through our website, we cannot and do not guarantee the security of any information you transmit on or through this website.</p>
                    </div>
                    
                    <!-- Section 11 -->
                    <div id="section11" class="privacy-section">
                        <h3 class="privacy-title">11. CHILDREN</h3>
                        <p>We do not knowingly collect personally identifiable information from children under 16 without permission from a parent or guardian. If you are a parent or legal guardian and you think your child under 16 has given us information, you can contact us at <a href="mailto:support@riohairco.com">support@riohairco.com</a>.</p>
                    </div>
                    
                    <!-- Section 12 -->
                    <div id="section12" class="privacy-section">
                        <h3 class="privacy-title">12. CHANGES TO THIS PRIVACY POLICY</h3>
                        <p>From time to time, we may change this Privacy Policy. We will notify you of any material changes to our Privacy Policy as required by law. We will also post an updated copy on our website. Please check our website periodically for updates. Your continued use of our website means that you consent to the collection, use and disclosure of your personal information as set out in the updated Privacy Policy.</p>
                    </div>
                    
                    <!-- Section 13 - Contact Information -->
                    <div id="section13" class="contact-section">
                        <h3 class="privacy-title">13. HOW TO CONTACT US</h3>
                        <p>Please direct any questions or comments about this Privacy Policy or privacy practices to:</p>
                        
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h5><i class="fas fa-envelope me-2"></i> Email</h5>
                                <p><a href="mailto:support@riohairco.com">support@riohairco.com</a></p>
                            </div>
                            <div class="col-md-6">
                                <h5><i class="fas fa-map-marker-alt me-2"></i> Mail</h5>
                                <p>RIO HAIR Co by RIO INTERNATIONAL<br>
                                128,129 A.R. Street<br>
                                Janaki Nagar<br>
                                Chennai 600087<br>
                                INDIA</p>
                            </div>
                        </div>
                        
                        <div class="info-box mt-4">
                            <h5><i class="fas fa-exclamation-circle me-2"></i> SMS Marketing Consent</h5>
                            <p class="mb-0">By submitting contact forms, you agree to receive recurring automated promotional and personalized marketing text messages (e.g. cart reminders) from RIOHAIRCo at the cell number used when signing up. Consent is not a condition of any purchase.</p>
                        </div>
                        
                        <div class="social-links mt-4">
                            <h5>Follow Us</h5>
                            <div class="social-icons">
                                <a href="#" title="Home"><i class="fas fa-home"></i></a>
                                <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                                <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            </div>
                            <p class="small mt-2">Click to Home | Click to Insta | Click to Facebook</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include_once 'includes/footer.php'; ?>    
    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-chevron-up"></i>
    </a>

    <!-- Bootstrap JS Bundle -->

    