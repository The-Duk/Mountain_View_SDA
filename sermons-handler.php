<?php
// ====================== SERMONS PAGE HANDLER ======================
// Currently no form on sermons.html, but ready if you add "Request a Sermon" or "Prayer Request"

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Add your logic here when you create a form on sermons.html
    header("Location: sermons.html?status=received");
    exit;
}

header("Location: sermons.html");
exit;
?>