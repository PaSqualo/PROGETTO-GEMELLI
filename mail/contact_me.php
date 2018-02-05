<?php
require '../vendor/autoload.php';
use Mailgun\Mailgun;
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
//    empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "Non ci sono dati!";
   return false;
   }
   
# First, instantiate the SDK with your API credentials
$mg = Mailgun::create('key-example');
# Instantiate the client.


# Now, compose and send your message.
# $mg->messages()->send($domain, $params);
$mg->messages()->send('example.com', [
  'from'    => 'pasquale@soolid.it',
  'to'      => 'sally@example.com',
  'subject' => 'The PHP SDK is awesome!',
  'text'    => 'It is so simple to send a message.'
]);?>