<main class="padding-bottom-lg">
    <div class="row ">
        <div class="col-lg-offset-2 col-lg-8">
            <div class="col-lg-4 tile-color-3 tile-lg room-tile">
                <div class="tile-content price">
                    <h2>Standard Room</h2>
                    <h6>R520 or R260 per person sharing</h6>
                </div>
                <div class="tile-content descr" hidden="">
                    <p>Standard rooms have a double bed OR two single beds with a full bathroom, a television and a telephone.</p>
                    <a href="#booking-form" onclick="makeBooking('standard')">Book now <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 tile-color-3 tile-lg room-tile">
                <div class="tile-content price">
                    <h2>Student Room</h2>
                    <h6>R520 or R260 per person sharing</h6>
                </div>
                <div class="tile-content descr" hidden="">
                    <p>Student rooms have two sets of bunk beds and two separate showers, a television and a telephone.</p>
                    <a href="#booking-form" onclick="makeBooking('student')">Book now <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 tile-color-3 tile-lg room-tile">
                <div class="tile-content price">
                    <h2>Suite</h2>
                    <h6>R600</h6>
                </div>
                <div class="tile-content descr" hidden="">
                    <p>Suites have a double bed and an open plan lounge, kitchenette with en-suite bathroom, a television and a telephone.</p>
                    <a href="#booking-form" onclick="makeBooking('suite')">Book now <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <hr/>

    <div class="row">
        <form class="form-horizontal col-lg-8 col-lg-offset-2 booking-form" id="booking-form">
            <fieldset class="">
                <!-- Form Name -->
                <h3 class="padding-top-bottom text-center">Book Your Rooms</h3>
                <div class="padding-top-bottom col-lg-6">
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Contact Person</label>
                        <div class="col-md-7">
                            <input id="textinput" name="textinput" type="text" placeholder="Contact Person" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Contact Number</label>
                        <div class="col-md-7">
                            <input id="textinput" name="textinput" type="text" placeholder="Contact Number" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Email Address</label>
                        <div class="col-md-7">
                            <input id="textinput" name="textinput" type="text" placeholder="Email Address" class="form-control input-md">
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 padding-top-bottom">
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Room</label>
                        <div class="col-md-7">
                            <select class="form-control input-md">
                                <option>Select a room...</option>
                                <option>Standard</option>
                                <option>Student</option>
                                <option>Suite</option>
                            </select>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">People</label>
                        <div class="col-md-7">
                            <input id="textinput" name="textinput" type="number" placeholder="How many guests?" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Date input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="appendedcheckbox">From</label>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input id="appendedcheckbox" name="appendedcheckbox" class="form-control" type="text" placeholder="Arrival">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- Date input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="appendedcheckbox">To</label>
                        <div class="col-md-7">
                            <div class="input-group">
                                <input id="appendedcheckbox" name="appendedcheckbox" class="form-control" type="text" placeholder="Departure">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-lg-12">
                    <label class="col-lg-2 control-label" for="checkboxes1">Special Requests</label>
                    <div class="col-lg-4">

                        <div class="checkbox">
                            <label for="checkboxes-1">
                                <input type="checkbox" name="checkboxes1" id="checkboxes-1" value="2"> Adjacent Rooms
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="checkboxes-1">
                                <input type="checkbox" name="checkboxes1" id="checkboxes-1" value="2"> No Smoking
                            </label>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-8 col-md-offset-2 text-center padding-top-bottom">
                    <input class="padding-left-right no-border-radius btn-lg btn btn-default" type="submit" value="Submit">

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
