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

<div class="h1omos">
    <h1>Event Kalender</h1>
</div>


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
