<?php
    include_once('views/header.html');
?>
    <main class="padding-bottom-lg ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- Nav tabs -->
                    <ul class="nav padding-bottom-lg " role="tablist">
                        <li role="presentation" class="active col-lg-2 tile-color-2 booking-tabs"><a class="tile-content" href="#rooms" aria-controls="rooms" role="tab" data-toggle="tab">Rooms</a></li>
                        <li role="presentation" class="col-lg-2 tile-color-2 booking-tabs"><a class="tile-content" href="#conferences" aria-controls="conferences" role="tab" data-toggle="tab">Conferences</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="rooms">
                            <?php include_once('views/book-room.php')?>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="conferences">
                            <?php include_once('views/book-conference.php')?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    include_once('views/footer.php');
?>