<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Sigende titel</title>
	
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">
	
	<link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-image: url('billeder/navbaggrund5.png'); background-size: cover; background-position: center;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="color: #ffffff">Navbar</a>
        <button class="navbar-toggler"  style="color: #ffffff" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="nav-link" href="#" style="color: #ffffff">Om os</a>
                <a class="nav-link" href="#" style="color: #ffffff">Kalender</a>
                <a class="nav-link" href="opslagstavle.php" style="color: #ffffff">Opslagstavle</a>
            </div>
        </div>
    </div>
</nav>


<div class="banner text-center text-white py-5" style="background-image:
url('billeder/træplanker.png'); background-size: cover; background-position: center; height: 300px;">
    <h1>Velkommen til vores hjemmeside</h1>
    <p>"Byt dig til en bæredygtig fremtid"</p>
</div>


<p class="paragraph"> ForordForordForordForordForordForordForordForordForordForordForordForordForordForordForord
    ForordForordForordForordForordForordForordForordForordForordForordForordForordForordForord
    ForordForordForordForordForordForordForordForordForordForordForordForordForordForordForord
    ForordForordForordForordForordForordForordForordForordForordForordForordForordForordForord
    ForordForordForordForordForordForordForordForordForordForordForordForordForordForordForord
    ForordForordForordForordForordForordForordForordForordForordForordForordForordForordForord</p>


<!-- Footer -->
<footer class="footer mt-auto py-3" style="background-color: #6B8E23; color: #fff; position: fixed; bottom: 0; left: 0; width: 100%; z-index: 1000;">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5>Kontakt Os</h5>
                <p>Email: info@dinhjemmeside.dk</p>
                <p>Telefon: +45 1234 5678</p>
            </div>
            <div class="col-md-4 mb-3">
                <h5>Følg Os</h5>
                <a href="#" style="color: #fff; text-decoration: none; margin: 0 10px;"><i class="fab fa-facebook"></i> Facebook</a>
                <a href="#" style="color: #fff; text-decoration: none; margin: 0 10px;"><i class="fab fa-instagram"></i> Instagram</a>
            </div>
            <div class="col-md-4 mb-3">
                <h5>Om Projektet</h5>
                <p>Swap-It er din platform til bæredygtig byttehandel.</p>
                <p>"Byt dig til en bæredygtig fremtid"</p>
            </div>
        </div>
    </div>
</footer>




<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
