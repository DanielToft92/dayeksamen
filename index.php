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

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Re-Trade er din bæredygtige platform til tøjbytte. Deltag i vores events i Køge og gør en forskel for miljøet!">
    <meta name="keywords" content="Re-Trade, tøjbytte, bæredygtighed, Køge, genbrug, events">
    <meta name="author" content="Re-Trade">

	<link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>


        /* Default styles (for mobile-first design) */
        #carouselExampleAutoplaying {
            width: 100%; /* Full width on smaller screens */
            max-width: 100%; /* Ensure it doesn't exceed the screen width */
        }

        /* Reduce carousel size on larger screens */
        @media (min-width: 768px) { /* Adjust breakpoint as needed */
            #carouselExampleAutoplaying {
                width: 60%; /* Make the carousel smaller on larger screens */
                margin: 0 auto; /* Center the carousel */
            }
        }

        @media (min-width: 1200px) { /* Adjust for very large screens */
            #carouselExampleAutoplaying {
                width: 40%; /* Further reduce size on extra-large screens */
            }
        }
    </style>

</head>

<body>

<?php include("navbar.php") ?>


<div class="banner text-center text-white py-5" style="background-image:
url('billeder/cloth4.jpg'); background-size: cover; background-position: center; height: 300px;">
    <h1>Velkommen til</h1>
    <h1>Re-Trade</h1>
    <p>"Byt dig til en bæredygtig fremtid"</p>
</div>


<section id="landing-page" style="text-align: center; margin-left: 10px; margin-right: 10px; padding-top: 20px;">
    <p>Re-Trade er din mulighed for at gøre noget godt for både miljøet og din garderobe. </p>
    <p>Hver første søndag i måneden samler vi Køge Kommune til et hyggeligt og inspirerende event på Tapperiet, hvor du kan give dit gamle tøj nyt liv og finde nye favoritter til din garderobe – helt gratis.</p>
    <p>Hos Re-Trade skaber vi rammerne for en bæredygtig livsstil. Ved at deltage i vores events hjælper du med at reducere spild, spare ressourcer og gøre en forskel for miljøet.</p>
    <p> Tag del i en grøn bevægelse, hvor tøjbytte bliver en naturlig del af hverdagen.</p>
</section>

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="margin-top: 15px; margin-bottom: 15px;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="billeder/carousellogo2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="billeder/carousel5.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="billeder/carousel4.png" class="d-block w-100" alt="...">
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

<section id="landing-page" style="text-align: center; margin-left: 10px; margin-right: 10px;">
        <p><strong>Tøjbytte for alle:</strong> Tag tøj, sko og accessories med, og byt med andre deltagere. Du bestemmer selv, hvad du vil bytte og med hvem.</p>
        <p><strong>Standområder med lokale butikker:</strong> Lokale butikker fra Køge sælger deres restvarer til stærkt nedsatte priser.</p>
        <p><strong>Mad og drikke:</strong> Nyd lækker mad og drikke, som er med til at støtte vores events.</p>
</section>


<div style="margin-top: 15px; margin-bottom: 15px;">
    <img src="billeder/tapperiet.png" class="d-block w-100" alt="...">
</div>



<?php include("footer.php") ?>




<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
