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

<?php include("navbar.php") ?>


<div class="banner text-center text-white py-5" style="background-image:
url('billeder/træplanker.png'); background-size: cover; background-position: center; height: 300px;">
    <h1>Velkommen til vores hjemmeside</h1>
    <p>"Byt dig til en bæredygtig fremtid"</p>
</div>


<p class="paragraph">Bæredygtighed er fundamentet for fremtiden. I en verden med begrænsede ressourcer er det vigtigt at
    handle ansvarligt. Hos Re-Trade stræber vi efter at gøre netop dette og skabe en mere bæredygtig fremtid.
</p>


<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="margin-top: 15px; margin-bottom: 15px;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="billeder/carousel.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="billeder/carousel2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="billeder/carousel3.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<?php include("footer.php") ?>




<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
