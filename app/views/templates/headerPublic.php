<?php session_start(); ?>
<?php
if (isset($_SESSION['auth']) == 1) {
    header('Location: /home');
}
?>

<!DOCTYPE html>
<html lang="en">
    <link rel="icon" href="/favicon.png">
    <title>COSC 4806</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <!-- Added CSS style -->
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <nav class="css-navbar">
        <div class="css-container">
          <a class="css-navbar-brand" href="#">COSC 4806</a>
          <ul>
            <li class="css-nav-item"><a href="/homePublic">Home</a></li>
            <li class="css-nav-item"><a href="/login">Login</a></li>
            <li class="css-nav-item"><a href="/create">SignUp</a></li>
          </ul>
        </div>
    </nav>