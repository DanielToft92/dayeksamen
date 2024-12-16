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
</head>

<body>

<?php include("navbar.php") ?>


<div class="h1omos">
<h1>Om os</h1>
</div>


<div class="container text-center custom-margin">
    <div class="row row-cols-2">
        <div class="col mt-4">
            <img src="billeder/rtlogo.png" alt="Description of image 1" class="img-fluid" style="height: 100px">
        </div>
        <div class="col mt-4">
            <p>Re-Trade er en bæredygtig bevægelse skabt for at mindske forbruget og styrke fællesskabet i Køge Kommune.
                Vi tror på, at små skridt kan føre til store forandringer,
                og vores tøjbytte-events er en nem og sjov måde at tage ansvar for miljøet på.</p>
        </div>
        <div class="col mt-3">
            <p>Vores månedlige events på Tapperiet er meget mere end bare tøjbytte. De er en anledning til at møde nye mennesker,
                dele gode historier og opdage skjulte skatte blandt andres glemte tøj. Derudover har vi skabt en platform,
                hvor lokale butikker kan sælge deres restvarer til fordelagtige priser, så intet går til spilde.</p>
        </div>
        <div class="col mt-3">
            <img src="billeder/omos/IMG_7510 1.png" alt="Description of image 4" class="img-fluid">
        </div>
        <div class="col mt-5">
            <img src="billeder/omos2.png" alt="Description of image 1" class="img-fluid">
        </div>
        <div class="col mt-5" style="text-align: center;">
            <p><strong>Vores vision:</strong></p>
                <p>"Vi skaber en bæredygtig og social platform for tøjbytte, hvor folk kan dele, genbruge og genopdage deres garderobe.
                    Vores mission er at reducere overforbrug og fremme en mere ansvarlig tilgang til mode ved at give gamle klæder nyt liv.
                    Samtidig styrker vi det lokale fællesskab gennem samarbejde, engagement og inspirerende events,
                    der bringer mennesker sammen om en fælles passion for bæredygtighed."</p>
            <p>Når du deltager i Re-Trade, er du med til at gøre en forskel – både for miljøet og for lokalsamfundet.</p>
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






<?php include("footer.php") ?>




<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
