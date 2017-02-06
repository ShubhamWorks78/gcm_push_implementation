<?php
/**
 * Created by PhpStorm.
 * User: shubham
 * Date: 2/6/2017
 * Time: 6:04 AM
 */

if ( isset($_POST["regId"]) && isset($_POST["message"])){
    include_once  './User.php';

    $message = $_POST["message"];
    $user = new user($_POST["regId"]);

    echo '<br />NOTIFY: '.$user->notify($message);
}