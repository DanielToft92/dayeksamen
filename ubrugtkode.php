/* Hent data fra databasen */

<div class="row g-2">
    <?php
    $produkter = $db->sql("SELECT * FROM produkter");
    foreach($produkter as $produkt) {
    ?>
    <div class="col-12 col-md-6">
        <div class="card w-100">
            <div class="card-header">
                <?php
                echo $produkt->prodNavn;
                ?>
            </div>
            <div class="card-body">
                <?php
                // Indsæt andet felt fra database
                ?>
            </div>
            <div class="card-footer text-muted">
                <?php
                // Indsæt andet felt fra database
                ?>
            </div>
        </div>
    </div>
<?php
}
?>