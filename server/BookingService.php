<?php

class BookingService{
    private $contactPerson;
    private $contactNumber;
    private $email;
    private $startDate;
    private $endDate;
    private $requests;
    private $room;
    private $guests;
    private $html;
    private $recipients = array('hermenmartins@gmail.com', 'booking@thestadiumhotel.co.za');
    private $subject;
    
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
        $this->room = strip_tags($room);
        $this->guests = strip_tags($guests);
        $this->subject .= date('Ymd') '-' . $this->contactPerson;
    }
    
    private function generateHTML(){
        $this->html = '<html><body>';
        $this->html .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
        $this->html .= "<tr style='background: #eee;'><td><strong>Client:</strong> </td><td>" . $this->contactPerson . "</td></tr>";
        $this->html .= "<tr><td><strong>Email:</strong> </td><td>" . $this->email . "</td></tr>";
        $this->html .= "<tr><td><strong>Contact Number:</strong> </td><td>" . $this->contactNumber . "</td></tr>";
        $this->html .= "<tr><td><strong>Room Type:</strong> </td><td>" . $this->room . "</td></tr>";
        $this->html .= "<tr><td><strong>Guests:</strong> </td><td>" . $this->guests . "</td></tr>";
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
