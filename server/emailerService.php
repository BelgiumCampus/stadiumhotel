<?php
  require('libs/PHPMailer/PHPMailerAutoload.php');

class EmailerService{ 
 private $mailer;
 private $sender;
 private $cc;
 private $body;
 private $header;
 private $recipients;
 private $subject;
    
function __construct($recipients, $cc, $subject, $body){
          $this->mailer = new PHPMailer();

          $this->mailer->isSMTP();
          //$this->mailer->SMTPDebug = 2;
          $this->mailer->SMTPAuth = true;                  // enable SMTP authentication
          $this->mailer->SMTPSecure = "tls";                 // sets the prefix to the servier
          $this->mailer->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
          $this->mailer->Port = 587;                   // set the SMTP port for the GMAIL server
          $this->mailer->Username = "thestadiumhotel@gmail.com";  // GMAIL username
          $this->mailer->Password = "@Stadium2016";            // GMAIL password
          $this->mailer->From = "thestadiumhotel@gmail.com";
          $this->mailer->FromName = "thestadiumhotel@gmail.com";

          for($i=0; $i < count($recipients); $i++){
              $this->mailer->addAddress($recipients[$i]);
          }
    
          $this->mailer->Subject = $subject;
          $this->mailer->Body = $body;
      }
      
 function SendMail(){
     try {
          $result = $this->mailer->send();
    
          if(!$result)
             return false;
          else return true;
      }
      catch (phpmailerException $e) {
        //log errors
        //save bookings
          
      } 
      catch (Exception $e) {
        //log errors
        //save bookings
      }
}
      
 function SendMailAsHTML(){
         $this->mailer->isHTML(true);
         return $this->SendMail();
      }
  }
?>
