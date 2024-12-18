<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Forside</title>
	
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



        #carouselExampleAutoplaying {
            width: 100%;
            max-width: 100%;
        }

        @media (min-width: 768px) {
            #carouselExampleAutoplaying {
                width: 60%;
                margin: 0 auto;
            }
        }

        @media (min-width: 1200px) {
            #carouselExampleAutoplaying {
                width: 40%;
            }
        }
    </style>

</head>

<body>

<header>
    <?php include("navbar.php"); ?>
    <div class="banner text-center text-white py-5" style="background-image: url('billeder/cloth4.jpg'); background-size: cover; background-position: center; height: 300px;">
        <h1>Velkommen til</h1>
        <h1>Re-Trade</h1>
        <p>"Byt dig til en bæredygtig fremtid"</p>
    </div>
</header>

<main>
    <section id="landing-page" class="text-center py-4">
        <h2>Gør noget godt for miljøet – og din garderobe!</h2>
        <p>Re-Trade inviterer dig til bæredygtige tøjbytte-events på Tapperiet i Køge. Hver første søndag i måneden kan du bytte tøj, sko og accessories, du ikke længere bruger, og finde nye favoritter – helt gratis. Sammen skaber vi et grønnere fællesskab og giver tøjet nyt liv.</p>
    </section>

    <section id="carousel-section" class="carousel-container">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="margin-top: 15px; margin-bottom: 15px;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="billeder/carousellogo2.png" class="d-block w-100" alt="Re-Trade logo">
                </div>
                <div class="carousel-item">
                    <img src="billeder/carousel5.png" class="d-block w-100" alt="Event image 1">
                </div>
                <div class="carousel-item">
                    <img src="billeder/carousel4.png" class="d-block w-100" alt="Event image 2">
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
    </section>

    <section id="features" class="text-center">
        <p><strong>Tøjbytte for alle:</strong> Tag tøj, sko og accessories med, og byt med andre deltagere. Du bestemmer selv, hvad du vil bytte og med hvem.</p>
        <p><strong>Standområder med lokale butikker:</strong> Lokale butikker fra Køge sælger deres restvarer til stærkt nedsatte priser.</p>
        <p><strong>Mad og drikke:</strong> Nyd lækker mad og drikke, som er med til at støtte vores events.</p>
    </section>

    <section id="venue-image" style="margin-top: 15px; margin-bottom: 15px; text-align: center;">
        <img src="billeder/tapperiet.png" class="d-block mx-auto img-fluid" alt="Tapperiet">
    </section>

    <section id="about" class="container text-center custom-margin">
        <div class="row row-cols-2">
            <div class="col mt-4">
                <img src="billeder/rtlogo.png" alt="Re-Trade logo" class="img-fluid" style="height: 100px">
            </div>
            <div class="col mt-4">
                <p>Re-Trade er en bæredygtig bevægelse skabt for at mindske forbruget og styrke fællesskabet i Køge Kommune. Vi tror på, at små skridt kan føre til store forandringer, og vores tøjbytte-events er en nem og sjov måde at tage ansvar for miljøet på.</p>
            </div>
            <div class="col mt-3">
                <p>Vores månedlige events på Tapperiet er meget mere end bare tøjbytte. De er en anledning til at møde nye mennesker, dele gode historier og opdage skjulte skatte blandt andres glemte tøj. Derudover har vi skabt en platform, hvor lokale butikker kan sælge deres restvarer til fordelagtige priser, så intet går til spilde.</p>
            </div>
            <div class="col mt-3" style="margin-bottom: 20px;">
                <img src="billeder/recycle.png" alt="Recycle logo" class="img-fluid">
            </div>
        </div>
    </section>
</main>

<footer>
    <?php include("footer.php"); ?>
</footer>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
