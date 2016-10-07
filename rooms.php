<?php 
    require('views/header.html');
?>
<main>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="col-lg-4 tile-color-3 tile-lg room-tile">
                <div class="tile-content price">
                    <h2>Standard Room</h2>
                    <h6>R520 or R260 per person sharing</h6>
                </div>
                <div class="tile-content descr" hidden="">
                    <p>Standard rooms have a double bed OR two single beds with a full bathroom, a television and a telephone.</p>
                    <a href="booking.php?room=standard">Book now <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 tile-color-3 tile-lg room-tile">
                <div class="tile-content price">
                    <h2>Student Room</h2>
                    <h6>R520 or R260 per person sharing</h6>
                </div>
                <div class="tile-content descr" hidden="">
                    <p>Student rooms have two sets of bunk beds and two separate showers, a television and a telephone.</p>
                    <a href="booking.php#booking-form" onclick="makeBooking('student')">Book now <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 tile-color-3 tile-lg room-tile">
                <div class="tile-content price">
                    <h2>Suite</h2>
                    <h6>R600</h6>
                </div>
                <div class="tile-content descr" hidden="">
                    <p>Suites have a double bed and an open plan lounge, kitchenette with en-suite bathroom, a television and a telephone.</p>
                    <a href="booking.php#booking-form" onclick="makeBooking('suite')">Book now <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <hr/>
</main>
<?php
    include_once('views/footer.php');
?>