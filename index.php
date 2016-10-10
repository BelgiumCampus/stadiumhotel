<?php
    require_once 'server/Autoload.php';
    require('views/header.html');

?>
    <main class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-10 col-xs-12 col-sm-12 col-md-offset-1 col-lg-offset-2">
                <section>
                    <?php include 'views/quickbooking-module.html'; ?>
                </section>
                <section class="margin-lg">
                    <?php include 'views/tile-module.html'; ?>
                </section>
            </div>
        </div>
    </main>
    <?php
    require_once 'views/footer.php';
?>
