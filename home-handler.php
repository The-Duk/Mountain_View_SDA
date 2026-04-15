<?php
// ====================== HOME PAGE HANDLER ======================
// Currently no form on home.html, but ready if you add one later (e.g. "Join Us This Sabbath" form)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Add your logic here when you create a form on home.html
    header("Location: home.html?status=received");
    exit;
}

header("Location: home.html");
exit;
?>