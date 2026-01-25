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
        
        /* Terms Content */
        .terms-content {
            padding: 5rem 0;
        }
        
        .terms-section {
            margin-bottom: 3rem;
        }
        
        .terms-title {
            position: relative;
            padding-bottom: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .terms-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: var(--secondary-color);
        }
        
        .section-number {
            display: inline-block;
            background-color: var(--secondary-color);
            color: white;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            text-align: center;
            line-height: 32px;
            margin-right: 10px;
            font-size: 0.9rem;
        }
        
        .info-box {
            background-color: #f9f7f3;
            padding: 1.5rem;
            border-radius: 8px;
            border-left: 4px solid var(--secondary-color);
            margin: 1.5rem 0;
        }
        
        .warning-box {
            background-color: #fff8e1;
            padding: 1.5rem;
            border-radius: 8px;
            border-left: 4px solid #ffc107;
            margin: 1.5rem 0;
        }
        
        .terms-content ul, .terms-content ol {
            padding-left: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .terms-content li {
            margin-bottom: 0.5rem;
        }
        
        .sub-section {
            margin-left: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .sub-section-title {
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }
        
        /* Definitions Section */
        .definitions-section {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin: 2rem 0;
        }
        
        .definition-item {
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #eee;
        }
        
        .definition-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .definition-term {
            font-weight: 600;
            color: var(--primary-color);
            display: block;
            margin-bottom: 0.25rem;
        }
        
        .definition-description {
            color: #555;
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
        @media (max-width: 768px) {
            .page-header {
                padding: 5rem 0 3rem;
            }
            
            .page-header h1 {
                font-size: 2.5rem;
            }
            
            .terms-content {
                padding: 3rem 0;
            }
            
            .definitions-section {
                padding: 1.5rem;
            }
        }
        
        @media (max-width: 576px) {
            .page-header h1 {
                font-size: 2rem;
            }
            
            .terms-title {
                font-size: 1.5rem;
            }
            
            .section-number {
                width: 28px;
                height: 28px;
                line-height: 28px;
                font-size: 0.8rem;
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
        
        /* Table of Contents */
        .toc-sidebar {
            position: sticky;
            top: 100px;
            background-color: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            height: fit-content;
        }
        
        .toc-sidebar h5 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--secondary-color);
        }
        
        .toc-list {
            list-style: none;
            padding-left: 0;
            margin-bottom: 0;
        }
        
        .toc-list li {
            margin-bottom: 0.5rem;
        }
        
        .toc-list a {
            color: var(--primary-color);
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            display: block;
            padding: 0.25rem 0;
        }
        
        .toc-list a:hover {
            color: var(--secondary-color);
            padding-left: 5px;
        }
    </style>
</head>
<body>
<!-- Navigation -->
<?php include_once 'includes/navbar.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Terms & Conditions</h1>
            <p>Please read these terms carefully before using our website or placing an order.</p>
        </div>
    </section>

    <!-- Terms & Conditions Content -->
    <section class="terms-content">
        <div class="container">
            <div class="row">
                <!-- Table of Contents Sidebar -->
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="toc-sidebar">
                        <h5>Table of Contents</h5>
                        <ul class="toc-list">
                            <li><a href="#section-intro">Introduction</a></li>
                            <li><a href="#section-terms">Terms of Service</a></li>
                            <li><a href="#section-ip">Intellectual Property</a></li>
                            <li><a href="#section-restrictions">Restrictions</a></li>
                            <li><a href="#section-content">Your Content</a></li>
                            <li><a href="#section-warranties">No Warranties</a></li>
                            <li><a href="#section-liability">Limitation of Liability</a></li>
                            <li><a href="#section-indemnity">Indemnification</a></li>
                            <li><a href="#section-general">General Terms</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Main Content -->
                <div class="col-lg-9">
                    <!-- Introduction -->
                    <div id="section-intro" class="terms-section">
                        <div class="info-box">
                            <h4><i class="fas fa-exclamation-triangle me-2"></i> Important Notice</h4>
                            <p class="mb-0">These Website Standard Terms and Conditions written on this webpage shall manage your use of this website. These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions.</p>
                        </div>
                        
                        <div class="warning-box">
                            <h4><i class="fas fa-ban me-2"></i> Age Restriction</h4>
                            <p class="mb-0">Minors or people below 18 years old are not allowed to use this Website.</p>
                        </div>
                    </div>
                    
                    <!-- Terms of Service Section -->
                    <div id="section-terms" class="terms-section">
                        <h2 class="terms-title">TERMS OF SERVICE</h2>
                        
                        <!-- Section 1 -->
                        <div class="mb-4">
                            <h4><span class="section-number">1</span> You are shopping on a merchant's/vendor website (the "Merchant")</h4>
                        </div>
                        
                        <!-- Section 2 -->
                        <div class="mb-4">
                            <h4><span class="section-number">2</span> Order Processing</h4>
                            <p>If you place a Qualifying Customer Order, the Product(s) that you are purchasing will be sold first by a Merchant to RioHairCo and or to their substitutes and then by RioHairCo to you under these Terms and Conditions. Your payment information, shipping address, and any additional information required or requested to complete your order will be shared directly with RioHairCo and its nominated agents and contractors, to enable RioHairCo to complete your Qualifying Customer Order.</p>
                        </div>
                        
                        <!-- Section 3 -->
                        <div class="mb-4">
                            <h4><span class="section-number">3</span> Order Agreement</h4>
                            <p>Your Qualifying Customer Order is subject to: (1) these Terms and Conditions; and (2) any relevant terms and conditions imposed by the Merchant. By completing your purchase, you confirm that you have read and agree to be bound by all of these. By placing a Qualifying Customer Order on the Merchant's website, you understand and agree that:</p>
                            
                            <div class="sub-section">
                                <div class="sub-section-title">3.1</div>
                                <p>You are dealing with and providing your information to RioHairCo. RioHairCo may contact you about your order.</p>
                            </div>
                            
                            <div class="sub-section">
                                <div class="sub-section-title">3.2</div>
                                <p>If there is an error in the price listed for a Product on the Merchant's website, or in the price applied to the product during the sale of and processing of your order for the Product, RioHairCo and its nominated agents are entitled to contact you, correct the price, and/or cancel your order.</p>
                            </div>
                            
                            <div class="sub-section">
                                <div class="sub-section-title">3.3</div>
                                <p>The Merchant remains responsible for handling payment for your order.</p>
                            </div>
                            
                            <div class="sub-section">
                                <div class="sub-section-title">3.4</div>
                                <p>Once your payment is processed, ownership in the items will shift from RioHairCo, to you.</p>
                            </div>
                            
                            <div class="sub-section">
                                <div class="sub-section-title">3.5</div>
                                <p>Certain addresses will be ineligible for shipment, such as PO box addresses.</p>
                            </div>
                            
                            <div class="sub-section">
                                <div class="sub-section-title">3.6</div>
                                <p>RioHairCo may refuse service, refuse to process or complete Qualifying Customer Orders, remove or edit content, or cancel such orders for any reason or for no reason, in its sole discretion.</p>
                            </div>
                            
                            <div class="sub-section">
                                <div class="sub-section-title">3.7</div>
                                <p>If you are under the age of majority in the jurisdiction in which you reside, approval of your parent or guardian is required to complete your purchase.</p>
                            </div>
                            
                            <div class="sub-section">
                                <div class="sub-section-title">3.8</div>
                                <p>You authorize RioHairCo and its nominated agents and contractors to perform any of the following activities in connection with the delivery of any Products: (i) to act as your agent to make and file customs declarations and all related actions as your direct representative, which expressly includes completing any documents, amending product or Harmonised System codes, and paying any duties, taxes or penalties required under applicable laws and regulations; (ii) to act as forwarding agent for customs import and export control purposes solely for the purpose of designating a customs broker to perform customs clearance and entry; and (iii) to redirect an order to your customs broker or other address upon request by any person whom RioHairCo's nominated agents and contractors believe in its reasonable opinion to be authorised.</p>
                            </div>
                        </div>
                        
                        <!-- Section 4 -->
                        <div class="mb-4">
                            <h4><span class="section-number">4</span> Currency</h4>
                            <p>You may select your preferred payment method and currency from a list of options available at the time of checkout. Please note that the relative value of currencies may vary, and as a result, the actual purchase price for items in your order may vary based on the currency selected.</p>
                        </div>
                        
                        <!-- Section 5 -->
                        <div class="mb-4">
                            <h4><span class="section-number">5</span> Billing</h4>
                            <p>If you use a payment card or other electronic form of payment as your payment type, the charges to your account for your order will be subject to the Merchant's terms and conditions.</p>
                        </div>
                        
                        <!-- Section 6 -->
                        <div class="mb-4">
                            <h4><span class="section-number">6</span> Shipping</h4>
                            <p>Items in your order may be shipped via a single shipment, or via multiple shipments. If items in your Qualifying Customer Order are shipped via multiple shipments, or if your order is only partially filled and shipped, you will only be charged for those items that are actually shipped to you.</p>
                        </div>
                        
                        <!-- Section 7 -->
                        <div class="mb-4">
                            <h4><span class="section-number">7</span> Chargebacks, Fraud Prevention and Void Transactions</h4>
                            <p>For your protection, RioHairCo may use various fraud prevention protocols and policies, and industry-standard verification systems, to reduce fraud and minimize chargeback risks. You must comply with such protocols and policies, including card authentication, and "ship to" and "bill to" address verification. Once an order is placed, you may not change any authenticated payment information or any verified "ship to"/"bill to" address. If there is a systemic error which results in the processing or acceptance of a transaction for which authorisation has been declined, that transaction will be void.</p>
                        </div>
                        
                        <!-- Section 8 -->
                        <div class="mb-4">
                            <h4><span class="section-number">8</span> Customer Service and Returns</h4>
                            <p>Questions or complaints about your order should be directed to the Merchant in the first instance. RioHairCo may work with the Merchant as necessary to resolve your issue. The Merchant is authorised to allow for returns or refunds on orders in accordance with the Merchant's policy, including to reimburse you for the original sales prices of Products returned to the Merchant's nominated address. RioHairCo may however refuse any return requested if a restriction applies to the item for which the return is requested. You accept that your sole remedies are against the Merchant.</p>
                            
                            <div class="info-box">
                                <p><strong>Return Process:</strong> Where a return by the Customer is authorised by RioHairCo or the Merchant, RioHairCo shall also have the right to return the item to Merchant and accordingly the Merchant shall issue a credit note to RioHairCo and RioHairCo shall provide a credit note to the Customer, and RioHairCo's direction, ownership and risk in the Products for return shall pass directly to the Merchant.</p>
                            </div>
                        </div>
                        
                        <!-- Section 9 - General Terms -->
                        <div class="mb-4">
                            <h4><span class="section-number">9</span> General Terms</h4>
                            <p>The following general terms apply whenever you place a Qualifying Customer Order through the Merchant's website:</p>
                            
                            <div class="sub-section">
                                <div class="sub-section-title">9.1 Compliance with Applicable Laws</div>
                                <p>You certify that any Products purchased through a Qualifying Customer Order will not be imported, exported, sold, or transferred in violation of any applicable laws, including without limitation the United States Export Administration Regulations or applicable United States sanctions and embargoes administered by the United States Treasury Department, and equivalent statutes, regulations and codes of England and Wales or the EU. It is your responsibility to know the laws of the country into which you are importing any Products that you order from the Merchant's website.</p>
                            </div>
                            
                            <div class="sub-section">
                                <div class="sub-section-title">9.2 Privacy</div>
                                <p>To complete your Qualifying Customer Order you will be providing personal information to the Merchant and RioHairCo and you consent to your personal information being collected, used, processed, disclosed and/or stored by the Merchant and RioHairCo and our service providers as may be required in order to process and complete your order and otherwise provide the services you have requested, in accordance with the Merchant's and RioHairCo's Privacy Policy.</p>
                            </div>
                            
                            <div class="sub-section">
                                <div class="sub-section-title">9.3 Electronic Communications</div>
                                <p>When you place a Qualifying Customer Order through the Merchant's website, you are communicating with RioHairCo electronically, and you consent to entering into this agreement by electronic means, and to receive communications from RioHairCo electronically/via email.</p>
                            </div>
                            
                            <div class="sub-section">
                                <div class="sub-section-title">9.4 Modifications</div>
                                <p>You acknowledge that RioHairCo may make changes to its system, policies, and these Terms and Conditions at any time. RioHairCo will ensure that the current version of these Terms and Conditions is presented every time you make a Qualifying Customer Order on the Merchant's website. You are responsible for reviewing these Terms and Conditions each time you make a Qualifying Customer Order.</p>
                            </div>
                            
                            <div class="sub-section">
                                <div class="sub-section-title">9.5 Severability</div>
                                <p>If any or any portion of these Terms and Conditions is found to be invalid, void, or for any reason unenforceable, that term or portion of terms will be severed, and will not affect the validity and enforceability of the remaining terms.</p>
                            </div>
                            
                            <div class="sub-section">
                                <div class="sub-section-title">9.6 Proceedings</div>
                                <p>Any action or proceeding arising out of or relating to these Terms and Conditions must be brought in the courts of Chennai in India and you hereby irrevocably agree to the jurisdiction of the courts of Chennai in India for all such purposes.</p>
                            </div>
                            
                            <div class="sub-section">
                                <div class="sub-section-title">9.7 Language</div>
                                <p>The parties have agreed and expressly requested that this agreement and all documents related to it be drawn up in English.</p>
                            </div>
                            
                            <div class="sub-section">
                                <div class="sub-section-title">9.8 Definitions</div>
                                
                                <!-- Definitions Section -->
                                <div class="definitions-section mt-3">
                                    <div class="definition-item">
                                        <span class="definition-term">"Member State", "third country" and "third territories"</span>
                                        <span class="definition-description">As defined in Article 5 of Council Directive 2006/12/EEC.</span>
                                    </div>
                                    
                                    <div class="definition-item">
                                        <span class="definition-term">"Products"</span>
                                        <span class="definition-description">Means those goods offered for sale via the Merchant's website which are not of a class or description subject to any duty of excise whether or not those goods are in fact chargeable with that duty, and whether or not that duty has been paid on those goods, or prohibited or restricted goods were they to be imported into the UK, and which are not subject to any restrictions on export, sale, or transfer in violation of any Applicable Laws.</span>
                                    </div>
                                    
                                    <div class="definition-item">
                                        <span class="definition-term">"Product Prices"</span>
                                        <span class="definition-description">Means the prices including VAT at the appropriate rate of the Products as held out for sale to Customer by the Merchant and accordingly, by RioHairCo to Customer; and "Product Price" means the price of an individual Product.</span>
                                    </div>
                                    
                                    <div class="definition-item">
                                        <span class="definition-term">"Qualifying Customer Order"</span>
                                        <span class="definition-description">Meets all of the following conditions:</span>
                                        <ul class="mt-2">
                                            <li>It is an order for Product or Products placed via the Merchant's website which are to be transported from specific locations as defined in the terms.</li>
                                            <li>In relation to the transport of a Product or Products to an address in Great Britain or NI, the total intrinsic value does not exceed £135.</li>
                                            <li>In relation to the transport of a Product or Products to an address in a Member State of the EU, the total intrinsic value does not exceed €150.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Intellectual Property Rights -->
                    <div id="section-ip" class="terms-section">
                        <h3 class="terms-title">INTELLECTUAL PROPERTY RIGHTS</h3>
                        <p>Other than the content you own, under these Terms, RioHairCo™ or RIO International and/or its licensors own all the intellectual property rights and materials contained in this Website.</p>
                        <p>You are granted limited license only for purposes of viewing the material contained on this Website.</p>
                    </div>
                    
                    <!-- Restrictions -->
                    <div id="section-restrictions" class="terms-section">
                        <h3 class="terms-title">RESTRICTIONS</h3>
                        <p>You are specifically restricted from all of the following:</p>
                        <ul>
                            <li>Publishing any Website material in any other media;</li>
                            <li>Selling, sublicensing and/or otherwise commercializing any Website material;</li>
                            <li>Publicly performing and/or showing any Website material;</li>
                            <li>Using this Website in any way that is or may be damaging to this Website;</li>
                            <li>Using this Website in any way that impacts user access to this Website;</li>
                            <li>Using this Website contrary to applicable laws and regulations, or in any way may cause harm to the Website, or to any person or business entity;</li>
                            <li>Engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website;</li>
                            <li>Using this Website to engage in any advertising or marketing.</li>
                        </ul>
                        <p>Certain areas of this Website are restricted from being access by you and RioHairCo and or RIO INTERNATIONAL may further restrict access by you to any areas of this Website, at any time, in absolute discretion. Any user ID and password you may have for this Website are confidential and you must maintain confidentiality as well.</p>
                    </div>
                    
                    <!-- Your Content -->
                    <div id="section-content" class="terms-section">
                        <h3 class="terms-title">YOUR CONTENT</h3>
                        <p>In these Website Standard Terms and Conditions, "Your Content" shall mean any audio, video text, images or other material you choose to display on this Website. By displaying Your Content, you grant RioHairCo and or RIO INTERNATIONAL a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media.</p>
                        <p>Your Content must be your own and must not be invading any third-party's rights. RIOHAIRCO AND OR RIO INTERNATIONAL™ reserves the right to remove any of Your Content from this Website at any time without notice.</p>
                    </div>
                    
                    <!-- No Warranties -->
                    <div id="section-warranties" class="terms-section">
                        <h3 class="terms-title">NO WARRANTIES</h3>
                        <p>This Website is provided "as is," with all faults, and RIOHAIRCO AND OR RIO INTERNATIONAL™ express no representations or warranties, of any kind related to this Website or the materials contained on this Website. Also, nothing contained on this Website shall be interpreted as advising you.</p>
                    </div>
                    
                    <!-- Limitation of Liability -->
                    <div id="section-liability" class="terms-section">
                        <h3 class="terms-title">LIMITATION OF LIABILITY</h3>
                        <p>In no event shall RIOHAIRCO AND OR RIO INTERNATIONAL™, nor any of its officers, directors and employees, shall be held liable for anything arising out of or in any way connected with your use of this Website whether such liability is under contract. RIOHAIRCO AND OR RIO INTERNATIONAL™, including its officers, directors and employees shall not be held liable for any indirect, consequential or special liability arising out of or in any way related to your use of this Website.</p>
                    </div>
                    
                    <!-- Indemnification -->
                    <div id="section-indemnity" class="terms-section">
                        <h3 class="terms-title">INDEMNIFICATION</h3>
                        <p>You hereby indemnify to the fullest extent RIOHAIRCO AND OR RIO INTERNATIONAL™ from and against any and/or all liabilities, costs, demands, causes of action, damages and expenses arising in any way related to your breach of any of the provisions of these Terms.</p>
                    </div>
                    
                    <!-- General Terms Section -->
                    <div id="section-general" class="terms-section">
                        <h3 class="terms-title">GENERAL TERMS</h3>
                        
                        <div class="mb-4">
                            <h5>Severability</h5>
                            <p>If any provision of these Terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein.</p>
                        </div>
                        
                        <div class="mb-4">
                            <h5>Variation of Terms</h5>
                            <p>RIOHAIRCO AND OR RIO INTERNATIONAL™ is permitted to revise these Terms at any time as it sees fit, and by using this Website you are expected to review these Terms on a regular basis.</p>
                        </div>
                        
                        <div class="mb-4">
                            <h5>Assignment</h5>
                            <p>RIOHAIRCO AND OR RIO INTERNATIONAL™ is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.</p>
                        </div>
                        
                        <div class="mb-4">
                            <h5>Entire Agreement</h5>
                            <p>These Terms constitute the entire agreement between RIOHAIRCO AND OR RIO INTERNATIONAL™ and you in relation to your use of this Website, and supersede all prior agreements and understandings.</p>
                        </div>
                        
                        <div class="mb-4">
                            <h5>Governing Law & Jurisdiction</h5>
                            <p>These Terms will be governed by and interpreted in accordance with the laws of INDIA, and you submit to the non-exclusive jurisdiction of the courts located in Chennai City for the resolution of any disputes.</p>
                        </div>
                        
                        <div class="info-box mt-4">
                            <h5><i class="fas fa-calendar-check me-2"></i> Last Updated</h5>
                            <p class="mb-0">These Terms & Conditions were last updated on January 2026.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
<?php include_once('includes/footer.php');          ?>

    
    <script>
        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.98)';
                navbar.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.1)';
            } else {
                navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
                navbar.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.05)';
            }
            
            // Back to top button
            const backToTop = document.getElementById('backToTop');
            if (window.scrollY > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });

        // Back to top functionality
        document.getElementById('backToTop').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Smooth scrolling for table of contents links
        document.querySelectorAll('.toc-list a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Mobile table of contents toggle
        const mobileTocToggle = document.createElement('button');
        mobileTocToggle.className = 'btn btn-secondary d-lg-none mb-4 w-100';
        mobileTocToggle.innerHTML = '<i class="fas fa-bars me-2"></i> Show Table of Contents';
        
        const mainContent = document.querySelector('.col-lg-9');
        if (mainContent) {
            mainContent.insertBefore(mobileTocToggle, mainContent.firstChild);
            
            const tocSidebar = document.querySelector('.toc-sidebar').cloneNode(true);
            tocSidebar.classList.remove('d-none');
            tocSidebar.classList.add('mobile-toc');
            tocSidebar.style.display = 'none';
            
            mainContent.insertBefore(tocSidebar, mobileTocToggle.nextSibling);
            
            mobileTocToggle.addEventListener('click', function() {
                const toc = document.querySelector('.mobile-toc');
                if (toc.style.display === 'none' || toc.style.display === '') {
                    toc.style.display = 'block';
                    mobileTocToggle.innerHTML = '<i class="fas fa-times me-2"></i> Hide Table of Contents';
                } else {
                    toc.style.display = 'none';
                    mobileTocToggle.innerHTML = '<i class="fas fa-bars me-2"></i> Show Table of Contents';
                }
            });
        }
    </script>
</body>
</html>