<?php

/**
 * Created by PhpStorm.
 * User: shubham
 * Date: 1/24/2017
 * Time: 6:35 AM
 */

include_once './config.php';

class GCM
{
    function __construct()
    {

    }

    /**
     * Sending Push Notification
     */

    static public function send_notification($registration_ids,$message){

        if(!is_array($message)){
            $message = array('push_notification' => $message);
        }
        if(!is_array($registration_ids)){
            $registration_ids = array($registration_ids);
        }

        $url = 'https://android.googleapis.com/gcm/send';

        $fields = array(
            'registration_ids' => $registration_ids,
            'data' => $message,
        );

        $headers = array(
            'Authorizaton: key=' . GOOGLE_API_KEY,
            'Content-Type: application/json'
        );

        //open connection

        $ch = curl_init();

        //set the url,number of POST vars, Post data
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //Disabling SSL Certificate support temporarily
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

        //Execute Post
        $result = curl_exec($ch);
        if ($result == FALSE){
            die("Curl failed: " . curl_error($ch));
        }

        curl_close($ch);
        return $result;
    }

}