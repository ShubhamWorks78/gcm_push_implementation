<?php
/**
 * Created by PhpStorm.
 * User: shubham
 * Date: 2/6/2017
 * Time: 6:25 AM
 */

if(isset($_POST["regId"])){
    include_once './User.php';

    $user = new User($_POST["regId"]);
    $res = $user->delete();

    if($res){
        echo 'Success';
    }
    else{
        echo 'fail';
    }
}else{
    echo 'User details missing';
}