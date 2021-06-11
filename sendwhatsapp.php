<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once 'vendor/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "AC58b69314b7e29ae45766a47aec03734a"; 
$token  = "c5d61fa768b08586475e2eb18ef9c5d0"; 
$twilio = new Client($sid, $token); 

// $your_number = "+263774849270";
$tinah_number = "+263772806036";

$message = $twilio->messages->create(
  "whatsapp:$tinah_number", // to 
    array( 
        "from" => "whatsapp:+14155238886",       
        "body" => "Your appointment is coming up on July 21 at 3PM" 
    ) 
); 
 
print($message->sid);

?>