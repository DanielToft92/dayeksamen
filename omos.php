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

<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-image: url('billeder/footerbaggrund2.png'); background-size: cover; background-position: center;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="nav-link" href="omos.php">Om os</a>
                <a class="nav-link" href="kalender.php">Kalender</a>
                <a class="nav-link" href="opslagstavle.php">Opslagstavle</a>
            </div>
        </div>
    </div>
</nav>


<div class="h1omos">
<h1>Om os</h1>
</div>


<div class="container text-center custom-margin">
    <div class="row row-cols-2">
        <div class="col mt-4">
            <img src="billeder/omos/sustain.jpg" alt="Description of image 1" class="img-fluid">
        </div>
        <div class="col mt-4">
            <p>This is a paragraph of text related to the second image.
                This is a paragraph of text related to the second image.
                This is a paragraph of text related to the second image.</p>
        </div>
        <div class="col mt-3">
            <p>This is a paragraph of text related to the second image.
                This is a paragraph of text related to the second image.
                This is a paragraph of text related to the second image.</p>
        </div>
        <div class="col mt-3">
            <img src="billeder/omos/sustain2.jpg" alt="Description of image 4" class="img-fluid">
        </div>
        <div class="col mt-5">
            <img src="billeder/omos/sustain3.jpg" alt="Description of image 1" class="img-fluid">
        </div>
        <div class="col mt-5">
            <p>This is a paragraph of text related to the second image.
                This is a paragraph of text related to the second image.
                This is a paragraph of text related to the second image.</p>
        </div>
        <div class="col mt-3">
            <p>This is a paragraph of text related to the second image.
                This is a paragraph of text related to the second image.
                This is a paragraph of text related to the second image.</p>
        </div>
        <div class="col mt-3">
            <img src="billeder/omos/sustain.jpg" alt="Description of image 4" class="img-fluid">
        </div>
        <div class="col mt-4">
            <img src="billeder/omos/sustain2.jpg" alt="Description of image 1" class="img-fluid">
        </div>
        <div class="col mt-4">
            <p>This is a paragraph of text related to the second image.
                This is a paragraph of text related to the second image.
                This is a paragraph of text related to the second image.</p>
        </div>
        <div class="col mt-3">
            <p>This is a paragraph of text related to the second image.
                This is a paragraph of text related to the second image.
                This is a paragraph of text related to the second image.</p>
        </div>
        <div class="col mt-3">
            <img src="billeder/omos/sustain3.jpg" alt="Description of image 4" class="img-fluid">
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11 mt-5 mb-5">
            <div class="ratio ratio-16x9">
                <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4525.297591490187!2d12.188052577149772!3d55.45135551516891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4652f051c5406bdb%3A0x4e8db22d6ff7c142!2sS%C3%B8ndre%20Badevej%201%2C%204600%20K%C3%B8ge!5e0!3m2!1sda!2sdk!4v1733749569134!5m2!1sda!2sdk"
                        style="border: 0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</div>






<footer class="footer mt-auto py-3"
        style="background-image: url('billeder/footerbaggrund2.png'); background-size: cover; background-position: center; color: #000000;">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5 style="color: inherit;">Kontakt Os</h5>
                <p style="color: inherit;">Email: re-trade@zealand.dk</p>
                <p style="color: inherit;">Telefon: +45 12345678</p>
                <p style="color: inherit;">Adresse: Søndre Badevej 1, 4600 Køge</p>
            </div>
            <div class="col-md-4 mb-3">
                <h5 style="color: inherit;">Følg Os</h5>
                <a href="#" style="color: inherit; text-decoration: none; margin: 0 10px;">
                    <i class="fab fa-facebook"></i> Facebook
                </a>
                <a href="#" style="color: inherit; text-decoration: none; margin: 0 10px;">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
                <a href="#" style="color: inherit; text-decoration: none; margin: 0 10px;">
                    <i class="fab fa-tik-tok"></i> Tik-Tok
                </a>
                <a href="#" style="color: inherit; text-decoration: none; margin: 0 10px;">
                    <i class="fab fa-youtube"></i> Youtube
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <h5 style="color: inherit;">Om Projektet</h5>
                <p style="color: inherit;">Re-Trade er din platform til bæredygtig byttehandel.</p>
                <p style="color: inherit;">"Byt dig til en bæredygtig fremtid"</p>
            </div>
        </div>
    </div>
</footer>




<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
