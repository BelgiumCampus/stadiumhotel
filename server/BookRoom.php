<?php

class BookRoom extends BookService{
    private $contactPerson;
    private $contactNumber;
    private $email;
    private $startDate;
    private $endDate;
    private $requests;
    private $room;
    private $guests;
    private $duration;
    
    /**
     * Booking Room constructor
     * @param [[Type]] $contactPerson [[Description]]
     * @param [[Type]] $contactNumber [[Description]]
     * @param [[Type]] $enail         [[Description]]
     * @param [[Type]] $startDate     [[Description]]
     * @param [[Type]] $endDate       [[Description]]
     * @param [[Type]] $requests      [[Description]]
     * @param [[Type]] $room          [[Description]]
     * @param [[Type]] $guests        [[Description]]
     */
    function __construct($contactPerson, $contactNumber, $email, $startDate, $endDate, $requests, $room, $guests){
        $this->email = strip_tags($email);
        $this->contactPerson = strip_tags($contactPerson);
        $this->contactNumber = strip_tags($contactNumber);
        $this->startDate = strip_tags($startDate);
        $this->endDate = strip_tags($endDate);
        $this->requests = ($requests);
        $this->room = $room;
        $this->guests = strip_tags($guests);
        $this->recipients = array('hermenmartins@gmail.com', 'booking@thestadiumhotel.co.za');
        $this->subject = date('YmdHis') . '-' . $this->contactPerson;
        //$this->duration =  $this->calcDuration($startDate,$endDate);
    }
    
    private function generateHTML(){
        $this->html = '<html><body><p>' . $this->contactPerson . ' would like to make a booking at the stadium hotel. Please see details below.</p><br/>';
        $this->html .= '<table rules="all" border="1" style="border-color: #666;" cellpadding="10">';
        $this->html .= "<tr style='background: #eee;'><td><strong>Booking Number:</strong> </td><td>" . $this->subject . "</td></tr>";
        $this->html .= "<tr><td><strong>Contact Person:</strong></td><td>" . $this->contactPerson . "</td></tr>";
        $this->html .= "<tr><td><strong>Email:</strong> </td><td>" . $this->email . "</td></tr>";
        $this->html .= "<tr><td><strong>Contact Number:</strong> </td><td>" . $this->contactNumber . "</td></tr>";
        $this->html .= "<tr><td><strong>Number of Standard Rooms:</strong> </td><td>" . $this->room['standard'] . "</td></tr>";
        $this->html .= "<tr><td><strong>Number of Student Rooms:</strong> </td><td>" . $this->room['student'] . "</td></tr>";
        $this->html .= "<tr><td><strong>Number of Suites</strong> </td><td>" . $this->room['suite'] . "</td></tr>";
        $this->html .= "<tr><td><strong>Guests:</strong> </td><td>" . $this->guests . "</td></tr>";
        $this->html .= "<tr><td><strong>Special Requests:</strong> </td><td>" . implode(', ',$this->requests) . "</td></tr>";
        $this->html .= "<tr><td><strong>Arrival Date: </strong> </td><td>" . $this->startDate . "</td></tr>";
        $this->html .= "<tr><td><strong>Departure Date: </strong> </td><td>" . $this->endDate . "</td></tr>";
        $this->html .= '</table>';
        $this->html .= '</body></html>';
    }
    
    public function Book() {
        $this->generateHTML();
        $sender = new EmailerService($this->recipients, null, $this->subject, $this->html);
        $sender->SendMailAsHTML();
    }
}
?>
