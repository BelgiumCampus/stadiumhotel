<?php

class ContactUs{
    private $recipients = array('hermenmartins@gmail.com',' info@thestadiumhotel.co.za'); /*set to the hotel email address*/
    private $subject;
    private $message;
    
    function __construct($name,$email, $subject, $message){
        $this->subject = 'Sender email:' . $email . ' - ' . 'Sender name:' . $name . ' - '  . $subject;
        $this->message = $message;
    }
    
    function SendMessage(){
        $sender = new EmailerService($this->recipients, null, $this->subject, $this->message);
        return $sender->SendMail();
    }
}
?>