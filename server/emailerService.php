<?php
  require('libs/PHPMailer/PHPMailerAutoload.php');

class EmailerService{ 
 protected $mailer;
 protected $sender;
 protected $cc;
 protected $body;
 protected $header;
 protected $recipients;
 protected $subject;
    
function __construct($sender, $recipients, $cc, $subject, $body, $header){
          $this->mailer = new PHPMailer();

          $this->mailer->isSMTP();
          $this->mailer->SMTPDebug = 2;
          $this->mailer->SMTPAuth = true;                  // enable SMTP authentication
          $this->mailer->SMTPSecure = "ssl";                 // sets the prefix to the servier
          $this->mailer->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
          $this->mailer->Port = 465;                   // set the SMTP port for the GMAIL server
          $this->mailer->Username = "thestadiumhotel@gmail.com";  // GMAIL username
          $this->mailer->Password = "@Stadium2016";            // GMAIL password
          $this->mailer->From = $sender;
          $this->mailer->FromName = "thestadiumhotel@gmail.com";

          for($i=0; $i < count($recipients); $i++){
              $this->mailer->addAddress($recipients[$i]);
          }
    
          $this->mailer->Subject = $subject;
          $this->mailer->Body = $body;
          $this->mailer->AltBody = "This is a plain text version of the email content";
          
      }
      
 function SendMail(){
     try {
          $result = $this->mailer->send();
        
          echo $result;
          if(!$result)
             echo false;
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
