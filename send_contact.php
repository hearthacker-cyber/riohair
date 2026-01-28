<?php
// send_contact.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Collect and sanitize form data
    $firstName = htmlspecialchars(trim($_POST['firstName']));
    $lastName = htmlspecialchars(trim($_POST['lastName']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $company = htmlspecialchars(trim($_POST['company'] ?? ''));
    $inquiryType = htmlspecialchars(trim($_POST['inquiryType']));
    $message = htmlspecialchars(trim($_POST['message']));
    
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
    $subject = "New Contact Form Submission - " . $inquiryText;
    
    // Email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    // Email content (HTML format)
    $emailContent = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background-color: #C9A24D; color: white; padding: 15px; text-align: center; border-radius: 5px 5px 0 0; }
            .content { padding: 20px; background-color: #f9f9f9; border: 1px solid #ddd; }
            .field { margin-bottom: 10px; padding-bottom: 10px; border-bottom: 1px solid #eee; }
            .label { font-weight: bold; color: #3B2F2F; display: inline-block; width: 150px; }
            .footer { margin-top: 20px; padding-top: 10px; color: #777; font-size: 12px; border-top: 1px solid #ddd; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>New Contact Form Submission</h2>
                <p>RioHairCo Website</p>
            </div>
            <div class='content'>
                <div class='field'>
                    <span class='label'>Inquiry Type:</span> {$inquiryText}
                </div>
                <div class='field'>
                    <span class='label'>Full Name:</span> {$firstName} {$lastName}
                </div>
                <div class='field'>
                    <span class='label'>Email:</span> {$email}
                </div>
                <div class='field'>
                    <span class='label'>Phone:</span> " . ($phone ?: 'Not provided') . "
                </div>
                <div class='field'>
                    <span class='label'>Company:</span> " . ($company ?: 'Not provided') . "
                </div>
                <div class='field'>
                    <span class='label'>Message:</span><br>
                    " . nl2br($message) . "
                </div>
            </div>
            <div class='footer'>
                <p>This message was sent from the contact form on RioHairCo website.</p>
                <p>Date: " . date('F j, Y, g:i a') . "</p>
                <p>IP Address: " . $_SERVER['REMOTE_ADDR'] . "</p>
            </div>
        </div>
    </body>
    </html>
    ";
    
    // Try to send email
    if (mail($to, $subject, $emailContent, $headers)) {
        // Redirect back to contact page with success message
        header("Location: contact.php?status=success");
        exit();
    } else {
        // Redirect back to contact page with error message
        header("Location: contact.php?status=error");
        exit();
    }
    
} else {
    // If not a POST request, redirect to contact page
    header("Location: contact.php");
    exit();
}
?>