<main class="padding-bottom-lg">
    <div class="row">
        <form action="" method="post" name="BookRoom" data-toggle="validator" class="form-horizontal col-lg-12 booking-form padding-bottom-lg" id="booking-form">
            <fieldset class="">
                <!-- Form Name -->
                <h3 class="padding-top-bottom text-center">Book Your Rooms</h3>
                <div class="padding-top-bottom col-lg-6">
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="contactperson">Contact Person</label>
                        <div class="col-md-7">
                            <input id="contactperson" name="BookRoom[contactPerson]" type="text" placeholder="Contact Person" class="form-control input-md" data-error="Please enter a valid name" required autocomplete="name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="contactnumber">Contact Number</label>
                        <div class="col-md-7">
                            <input id="contactnumber" name="BookRoom[contactNumber]" type="text" pattern="^[0-9]+$" placeholder="Contact Number" class="form-control input-md" data-error="Please enter a valid contact number" maxlength="10" minlength="10" required autocomplete="tel">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email Address</label>
                        <div class="col-md-7">
                            <input id="email" name="BookRoom[email]" type="email" placeholder="Email Address" class="form-control input-md" data-error="Please enter a valid email address" required autocomplete="email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <!-- Date input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="fromdate">From</label>
                        <div class="col-md-7">
                            <div class="input-group date start-date" id="arrivaldatepicker">
                                <input type="text" name="BookRoom[fromdate]" class=" form-control" value="<?php if(!empty($_GET["arrivedate"])) echo $_GET["arrivedate"]; ?>" placeholder="Arrival" data-error="Please pick a valid date" required>
                                <span class="no-border-radius input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <!-- Date input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="todate">To</label>
                        <div class="col-md-7">
                            <div class="input-group date start-date" id="departdatepicker">
                                <input type="text" name="BookRoom[todate]" class=" form-control" value="<?php if(!empty($_GET["departdate"]))  echo $_GET["departdate"]; ?>" placeholder="Departure" data-error="Please pick a valid date" required>
                                <span class="no-border-radius input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 padding-top-bottom">
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="standardRoom">Standard <i class="fa fa-info-circle" data-toggle="tooltip" title="Standard rooms have a double bed OR two single beds with a full bathroom, a television and a telephone."></i></label>
                        <div class="col-md-7">
                            <input id="standard" name="BookRoom[room][standard]" value="<?php if(!empty($_GET["people"])) echo ceil($_GET["people"] / 2); ?>" type="number" placeholder="How many rooms?" class="form-control input-md room-type" data-error="Please enter a valid amount of rooms" min="0" max="10" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="studentRoom">Student <i class="fa fa-info-circle" data-toggle="tooltip" title="Student rooms have two sets of bunk beds and two separate showers, a television and a telephone."></i></label>
                        <div class="col-md-7">
                            <input id="student" name="BookRoom[room][student]" type="number" placeholder="How many rooms?" class="form-control input-md room-type" data-error="Please enter a valid amount of rooms" min="0" max="7" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="suite">Suite <i class="fa fa-info-circle" data-toggle="tooltip" title="Suites have a double bed and an open plan lounge, kitchenette with en-suite bathroom, a television and a telephone."></i></label>
                        <div class="col-md-7">
                            <input id="suite" name="BookRoom[room][suite]" type="number" placeholder="How many rooms?" class="form-control input-md room-type" data-error="Please enter a valid amount of rooms" max="5" min="0" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    
                    <!-- Text input-->
                     <div class="form-group">
                        <label class="col-md-4 control-label" for="people">Guests Allowed</label>
                        <div class="col-md-7">
                            <label id="people" name="BookRoom[people]" class="col-md-4 control-label" for="people"><?php if(!empty($_GET["people"])) echo $_GET["people"]; ?></label>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <label class="col-lg-2 control-label" for="checkboxes1">Special Requests</label>
                    <div class="col-lg-4">

                        <div class="checkbox">
                            <input type="checkbox" name="BookRoom[requests][0]" id="request-1" value="Adjacent">
                            <label for="request-1">Adjacent Rooms</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="BookRoom[requests][1]" id="request-2" value="No smoking">
                            <label for="request-2">No Smoking</label>
                        </div>
                    </div>
                </div>


                <div class="col-md-8 col-md-offset-2 text-center padding-top-bottom">
                    <input class="padding-left-right no-border-radius btn-lg btn btn-default" name="BookRoom[submit]" type="submit" value="Submit">

                </div>
            </fieldset>

            <div class="col-lg-10 col-lg-offset-1">
                <div class="row">
                    <h3>Deposit</h3>
                    <p>
                        The total price of the reservation will be charged on the day of booking.
                    </p>
                    <h3>Cancellation</h3>
                    <p>
                        Reservations may be cancelled or amended up to 7 days prior to day of arrival. Failure to cancel your booking prior to this time will result in an automatic charge equivalent 100% of the accommodation being charged to your credit card. To cancel your booking please email <a href="mailto:info@thestadiumhotel.co.za">info@thestadiumhotel.co.za</a> directly quoting the Booking Reference Number issued with your confirmation.
                    </p>
                    <p>Strictly a maximum of two people sharing a room or suite.</p>
                </div>

            </div>
        </form>
    </div>
</main>
