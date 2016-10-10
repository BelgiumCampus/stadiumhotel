<main class="padding-bottom-lg">
    <div class="row">
        <form action="" method="post" name="BookRoom" data-toggle="validator" class="form-horizontal col-lg-12 booking-form" id="booking-form">
            <fieldset class="">
                <!-- Form Name -->
                <h3 class="padding-top-bottom text-center">Book Your Rooms</h3>
                <div class="padding-top-bottom col-lg-6">
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="contactperson">Contact Person</label>
                        <div class="col-md-7">
                            <input id="contactperson" name="BookRoom[contactPerson]" type="text" placeholder="Contact Person" class="form-control input-md" data-error="Please enter a valid name" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="contactnumber">Contact Number</label>
                        <div class="col-md-7">
                            <input id="contactnumber" name="BookRoom[contactNumber]" type="text" pattern="^[0-9]+$" placeholder="Contact Number" class="form-control input-md" data-error="Please enter a valid contact number" maxlength="10" minlength="10" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email Address</label>
                        <div class="col-md-7">
                            <input id="email" name="BookRoom[email]" type="email" placeholder="Email Address" class="form-control input-md" data-error="Please enter a valid email address" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 padding-top-bottom">
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="room">Room</label>
                        <div class="col-md-7">
                            <select id="room" name="BookRoom[room]" class="form-control input-md" required>
                                <option selected value="default">Select a room...</option>
                                <option value="standard">Standard</option>
                                <option value="student">Student</option>
                                <option value="suite">Suite</option>
                            </select>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="people">People</label>
                        <div class="col-md-7">
                            <input id="people" name="BookRoom[people]" type="number" min="1" max="2" placeholder="How many guests?" data-error="Please pick a valid number" class="form-control input-md" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <!-- Date input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="fromdate">From</label>
                        <div class="col-md-7">
                            <div class="input-group" id="book-room-start-date">
                                <input id="fromdate" name="BookRoom[fromdate]" class=" form-control" type="text" placeholder="Arrival" data-error="Please pick a valid date" required>
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <!-- Date input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="todate">To</label>
                        <div class="col-md-7">
                            <div class="input-group" id="book-room-end-date">
                                <input id="todate" name="BookRoom[todate]" class=" form-control" type="text" placeholder="Departure" data-error="Please pick a valid date" required>
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <label class="col-lg-2 control-label" for="checkboxes1">Special Requests</label>
                    <div class="col-lg-4">

                        <div class="checkbox">
                            <input type="checkbox" name="BookRoom[requests][0]" id="checkboxes-001" value="adjacent">
                            <label for="checkboxes-001">Adjacent Rooms</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="BookRoom[requests][1]" id="checkboxes-002" value="nosmoking">
                            <label for="checkboxes-002">No Smoking</label>
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
