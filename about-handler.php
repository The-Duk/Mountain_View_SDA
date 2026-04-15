<?php
// ====================== ABOUT PAGE HANDLER ======================
// Currently no form on about.html, but ready if you add feedback or ministry signup

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Add your logic here when you create a form on about.html
    header("Location: about.html?status=received");
    exit;
}

header("Location: about.html");
exit;
?>