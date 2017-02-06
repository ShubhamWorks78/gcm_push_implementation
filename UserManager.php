<?php

include_once 'User.php';
/**
 * Created by PhpStorm.
 * User: shubham
 * Date: 2/6/2017
 * Time: 6:38 AM
 */
class UserManager
{
    function __construct()
    {

    }

    static public function getAll(){
        return (DB_Functions::getInstance()->getAllUsers());
    }

    static  public function isExist($email){
        return (DB_Functions::getInstance()->getAllUsers());
    }

    static public function getByEmail($email){
        $user = DB_Functions::getInstance()->getUserByEmail($email);
        $user = mysql_fetch_assoc($user);

        return (new user(
            $user['gcm_regid'],
            $user['email'],
            $user['id'],
            $user['created_at']
        ));
    }

}