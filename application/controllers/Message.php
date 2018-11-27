<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Twilio\Rest\Client;

 //Send sms controller
class Message extends CI_Controller {
 
    public function index()
    {
        $data = ['phone' => '+94704447697', 'text' => 'Hello, CI'];
        print_r($this->sendSMS($data));
    }
 
    protected function sendSMS($data) {
          // Your Account SID and Auth Token from twilio.com/console
            $sid = 'ACffd5ef1231e19e4926f5228e963c70c2';
            $token = '8fcb114e617eb10b92ca792ceb8add62';
            $client = new Client($sid, $token);
            
            // Use the client to do fun stuff like send text messages!
             return $client->messages->create(
                // the number you'd like to send the message to
                $data['phone'],
                array(
                    // A Twilio phone number you purchased at twilio.com/console
                    "from" => "+1(910)600-6039",
                    // the body of the text message you'd like to send
                    'body' => $data['text']
                )
            );
    }
}