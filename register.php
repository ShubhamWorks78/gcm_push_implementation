<?php
/**
 * Created by PhpStorm.
 * User: shubham
 * Date: 2/6/2017
 * Time: 6:28 AM
 */

if(isset($_POST["email"]) && isset($_POST["regId"])){
    include_once './User.php';

    $user = new User($_POST["regId"],$_POST["email"]);

    echo '<br /> STORE: '.($user->store() != false ? ('Success') : ('fail'));

    echo '<br /> NOTIFY: '.$user->notify('You are registered');
}else{
    echo "User details missing";
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="gcm server push notification Storing">
        <meta name="viewport" content="width=device,initial-scale=1">
        <title>GCM Server Storing</title>
        <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="spaced">
            <button onclick="window.location='index.php'" class="btn btn-success">Back</button>
        </div>
    </body>
</html>