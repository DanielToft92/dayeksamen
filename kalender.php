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
    <h1>Event Kalender</h1>
</div>


<div class="container">
    <div class="row g-3"> <!-- Adjusted spacing between rows -->
        <?php
        $kalender = $db->sql("SELECT * FROM kalender");
        foreach ($kalender as $kalenderen) {
            ?>
            <div class="col-12 col-sm-10 col-md-6 mx-auto"> <!-- Center cards and adjust widths -->
                <div class="card">
                    <div class="card-header text-center"> <!-- Center align text -->
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



<footer class="footer mt-auto py-3"
        style="background-image: url('billeder/footerbaggrund2.png'); background-size: cover; background-position: center; color: #000000;">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5 style="color: inherit;">Kontakt Os</h5>
                <p style="color: inherit;">Email: re-trade@zealand.dk</p>
                <p style="color: inherit;">Telefon: +45 12345678</p>
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
