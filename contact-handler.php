<?php
// ====================== CONTACT FORM HANDLER ======================
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Capture and clean inputs from your contacts.html form
    $name    = strip_tags(trim($_POST["name"] ?? ""));
    $email   = filter_var(trim($_POST["email"] ?? ""), FILTER_SANITIZE_EMAIL);
    $message = strip_tags(trim($_POST["message"] ?? ""));

    $errors = [];

    // Validation
    if (empty($name))    $errors[] = "Name is required.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email is required.";
    if (empty($message)) $errors[] = "Message is required.";

    if (empty($errors)) {
        // Church official email (already on your site)
        $to      = "mountainviewchurch1844@gmail.com";
        $subject = "New Message from Mountain View SDA Church Website";

        $body = "You received a new contact form submission:\n\n";
        $body .= "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Message:\n$message\n\n";
        $body .= "Sent on: " . date("d M Y, H:i:s");

        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";

        if (mail($to, $subject, $body, $headers)) {
            header("Location: contacts.html?status=success");
            exit;
        } else {
            header("Location: contacts.html?status=error");
            exit;
        }
    } else {
        header("Location: contacts.html?status=error");
        exit;
    }
}

// If someone opens the file directly, redirect to the form
header("Location: contacts.html");
exit;
?>