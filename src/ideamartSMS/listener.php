<?php
/**
 * Created by PhpStorm.
 * User: Yasiru
 * Date: 12/8/2015
 * Time: 8:52 PM
 */
ini_set('error_log', 'sms-app-error.log');
require_once 'lib/Log.php';
require_once 'lib/SMSReceiver.php';
require_once 'lib/SMSSender.php';

define('SERVER_URL', 'http://localhost:7000/sms/send');
define('APP_ID', 'APPID');
define('APP_PASSWORD', 'password');

$logger = new Logger();

try{

    // Creating a receiver and intialze it with the incomming data
    $receiver = new SMSReceiver(file_get_contents('php://input'));

    //Creating a sender
    $sender = new SMSSender( SERVER_URL, APP_ID, APP_PASSWORD);

    $message = $receiver->getMessage(); // Get the message sent to the app
    $address = $receiver->getAddress();	// Get the phone no from which the message was sent

    $logger->WriteLog($receiver->getAddress());




    $status01='No_Request';
    $status02='Processing';
    $status03='Processed';

    $status='Processed';
    //$status='Processing';
    //$status='No_Request';

    list($keyword,$statusChk)=explode(" ",$message);
    if ($statusChk=='STATUS'){
        if ($status==$status01) {

            // Send a broadcast message to all the subcribed users
            $response=$sender->sms('You have not requested any service', $address);
        }
        else if($status==$status02){

            // Send a SMS to a particular user
            $response=$sender->sms('Your Request is Processing', $address);
        }
        else if($status==$status03){

            // Send a SMS to a particular user
            $response=$sender->sms('Your Service Processed', $address);
        }
    }




    //list($keyword,$statusChk)=explode(" ",$message);
    /*if ($statusChk=='No_Request') {

        // Send a broadcast message to all the subcribed users
        $response=$sender->sms('You have not requested any service', $address);
    }
    else if($statusChk=='Processing'){

        // Send a SMS to a particular user
        $response=$sender->sms('Your Request is Processing', $address);
    }
    else if($statusChk=='Finished'){

        // Send a SMS to a particular user
        $response=$sender->sms('Your Service Processed', $address);
    }*/




    /*list($keyword,$opt)=explode(" ",$message);

    if ($opt=='5555') {

        // Send a broadcast message to all the subcribed users
        $response=$sender->sms('Live@8 News Service Activated', $address);
    }
    else{

        // Send a SMS to a particular user
        $response=$sender->sms('Invalid Request', $address);
    }*/


    /*if ($message=='broadcast') {

        // Send a broadcast message to all the subcribed users
        $response = $sender->broadcast("This is a broadcast message to all the subcribers of the application");

    }
    else if(($message=='yasiru')){

        // Send a SMS to a particular user
        $response=$sender->sms('This message is sent only to yasiru', $address);
    }
    else{

        // Send a SMS to a particular user
        $response=$sender->sms('This message is sent only to one user', $address);
    }*/

}catch(SMSServiceException $e){
    $logger->WriteLog($e->getErrorCode().' '.$e->getErrorMessage());
}

?>