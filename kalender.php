<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
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
</head>

<body>

<?php include("navbar.php") ?>

<div class="h1omos">
    <h1>Event Kalender</h1>
</div>


<section id="event-calendar" style="text-align: center;">
    <p>Vil du holde dig opdateret på vores kommende tøjbytte-events? Med vores eventkalender går du aldrig glip af en mulighed for at være med.</p>
    <p> Kalenderen opdateres løbende, så du altid kan finde den næste dato og detaljer om vores arrangementer.</p>
    <p><strong>Hvad kan du forvente til vores events?</strong></p>
        <p>En hyggelig atmosfære med fokus på bæredygtighed.</p>
        <p>Mulighed for at bytte tøj, sko og accessories i dit eget tempo.</p>
        <p>Standområder med restvarer fra lokale butikker til nedsatte priser.</p>
        <p>Mad- og drikkesalg, der støtter vores events og skaber en god stemning.</p>
</section>


<div class="container">
    <div class="row g-3">
        <?php
        $kalender = $db->sql("SELECT * FROM kalender");
        foreach ($kalender as $kalenderen) {
            ?>
            <div class="col-12 col-sm-10 col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <?php echo $kalenderen->eventNavn; ?>
                    </div>
                    <div class="card-body">
                        <?php echo $kalenderen->eventBeskrivelse; ?>
                    </div>
                    <div class="card-footer">
                        <?php echo $kalenderen->eventDato; ?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>



<?php include("footer.php") ?>




<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
