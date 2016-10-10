<main>
    <div class="padding-bottom-lg row">
        <form data-toggle="validator" action="" method="post" class="form-horizontal">
            <fieldset class="col-lg-12 booking-form">

                <!-- Form Name -->
                <h3 class="padding-top-bottom text-center">Build Your Conference</h3>
                <div class="padding-top-bottom col-md-6">
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="companyname">Company Name</label>
                        <div class="col-md-7">
                            <input id="companyname" name="companyname" type="text" placeholder="Company name" class="form-control input-md" data-error="Please enter a valid name" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="contactperson">Contact Person</label>
                        <div class="col-md-7">
                            <input id="contactperson" name="contactperson" type="text" placeholder="Contact Person" class="form-control input-md" data-error="Please enter a valid name" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="contactnum">Contact Number</label>
                        <div class="col-md-7">
                            <input id="contactnum" name="contactnum" type="text" pattern="^[0-9]+$" placeholder="Contact Number" data-error="Invalid Phone Number" maxlength="10" minlength="10" class="form-control input-md" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="emailaddress">Email Address</label>
                        <div class="col-md-7">
                            <input id="emailaddress" name="emailaddress" type="email" placeholder="Email Address" class="form-control input-md" data-error="Invalid Email Address" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <!-- Date input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="conferencedate">Date</label>
                        <div class="col-md-7">
                            <div class="input-group date start-date" id="conferencedatepicker">
                                <input type="text" name="conferencedate" class=" form-control" placeholder="Conference Date" data-error="Please pick a valid date" required>
                                <span class="no-border-radius input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <!-- Time input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="conferencetime">Time</label>
                        <div class="col-md-7">
                            <div class="input-group clockpicker" id="conferencetime">
                                <input id="timepicker" type="time" name="conferencetime" class="form-control" placeholder="Conference Time" data-error="Please pick a valid time" required>
                                <span class="no-border-radius input-group-addon"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="attendees">Number of Attendees</label>
                        <div class="col-md-7">
                            <input id="attendees" name="attendees" type="text" pattern="^[1-9]+$" placeholder="Number of Attendees" data-error="Invalid Number" class="form-control input-md" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="occasion">Occasion</label>
                        <div class="col-md-7">
                            <input id="occasion" name="occasion" type="text" placeholder="Occasion" class="form-control input-md" data-error="Please enter an occasion" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="budget">Budget</label>
                        <div class="col-md-7">
                            <input id="budget" name="budget" type="text" pattern="^\d{1,}\.?\d{0,2}$" placeholder="Budget" data-error="Invalid Number" class="form-control input-md" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>

                <div class="padding-top-bottom col-md-6">

                    <!-- Multiple Radios (inline) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="radios">Preferred Conference Room & Layout:</label>
                        <div class="padding-bottom col-md-8">
                            <input type="radio" name="radios" id="radios-0" value="Kings Room Cinema Style" required>
                            <label class="padding-right" for="radios-0">Kings Room Cinema Style (60 People)</label>

                            <input type="radio" name="radios" id="radios-1" value="Kings School Room" required>
                            <label class="padding-right" for="radios-1">Kings School Room (30 People)</label>

                            <input type="radio" name="radios" id="radios-2" value="Kings Board Room" required>
                            <label class="padding-right" for="radios-2">Kings Board Room (20 People)</label>
                        </div>

                        <div class="padding-bottom col-md-8 col-md-offset-4">
                            <input type="radio" name="radios" id="radios-3" value="Bay Room Cinema Style" required>
                            <label class="padding-right" for="radios-3">Bay Room Cinema Style (30 People)</label>

                            <input type="radio" name="radios" id="radios-4" value="Bay School Room" required>
                            <label class="padding-right" for="radios-4">Bay School Room (20 People)</label>

                            <input type="radio" name="radios" id="radios-5" value="Bay Board Room" required>
                            <label class="padding-right" for="radios-5">Bay Board Room (15 People)</label>
                        </div>
                        <div class="padding-bottom col-md-8 col-md-offset-4">
                            <input type="radio" name="radios" id="radios-6" value="Warriors Board Room" required>
                            <label class="padding-right" for="radios-6">Warriors Board Room (15 People)</label>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <!-- Multiple Checkboxes -->
                    <div class="form-group">
                        <label class="no-padding col-md-2 control-label" for="checkboxes">Cuisine Per Person</label>
                        <div class="col-md-12">
                            <br>
                        </div>

                        <div class="padding-bottom col-md-4">
                            <label class="col-md-4 control-label" for="checkboxes">Breakfast</label>
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <input type="checkbox" name="checkboxes" id="checkboxes-1" value="B15 Tea Coffee">
                                    <label for="checkboxes-1">R15 - Tea and/or coffee</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" name="checkboxes" id="checkboxes-2" value="B20 Biscuits">
                                    <label for="checkboxes-2">R20 - Biscuits</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" name="checkboxes" id="checkboxes-3" value="B50 Plated">
                                    <label for="checkboxes-3">R50 - Plated</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" name="checkboxes" id="checkboxes-4" value="B85 Buffet">
                                    <label for="checkboxes-4">R85 - Buffet</label>
                                </div>
                            </div>
                        </div>

                        <div class="padding-bottom col-md-4">
                            <label class="col-md-4 control-label" for="checkboxes1">Lunch</label>
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <input type="checkbox" name="checkboxes1" id="checkboxes-5" value="L15 Tea Coffee">
                                    <label for="checkboxes-5">R15 - Tea and/or coffee</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" name="checkboxes1" id="checkboxes-6" value="L20 Biscuits">
                                    <label for="checkboxes-6">R20 - Biscuits </label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" name="checkboxes1" id="checkboxes-7" value="L35 Sandwiches">
                                    <label for="checkboxes-7">R35 - Sandwiches </label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" name="checkboxes1" id="checkboxes-8" value="L45 Pastries">
                                    <label for="checkboxes-8">R45 - Pastries</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" name="checkboxes1" id="checkboxes-9" value="L75 Lunch">
                                    <label for="checkboxes-9">R75 - Lunch</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" name="checkboxes1" id="checkboxes-0" value="L100 Lunch">
                                    <label for="checkboxes-0">R100 - Lunch </label>
                                </div>

                            </div>
                        </div>
                        <div class="padding-bottom col-md-4">

                            <label class="col-md-4 control-label" for="checkboxes2">Dinner</label>
                            <div class="col-md-12">

                                <div class="checkbox">
                                    <input type="checkbox" name="checkboxes2" id="checkboxes-01" value="D100 Dinner">
                                    <label for="checkboxes-01">R100 - Dinner</label>
                                </div>
                                <div class="checkbox">
                                    <input type="checkbox" name="checkboxes2" id="checkboxes-02" value="D140 Dinner">
                                    <label for="checkboxes-02">R140 - Dinner </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2 text-center padding-top-bottom">
                    <input class="padding-left-right no-border-radius btn-lg btn btn-default" type="submit" value="Submit">

                </div>

            </fieldset>
        </form>


    </div>
</main>
