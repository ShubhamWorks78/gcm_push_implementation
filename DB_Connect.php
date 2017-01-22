<?php

/**
 * Created by PhpStorm.
 * User: shubham
 * Date: 1/22/2017
 * Time: 5:57 AM
 */

require_once 'config.php';
class DB_Connect
{
    //Constructor for the Class
    function __construct()
    {

    }

    //Destructor for the Class
    function __destruct()
    {
        //this->close();
    }

    //Function for database connection
    public function connect(){
        //Connecting to the server

        $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);

        //selecting database
        mysqli_select_db(DB_NAME);

        return $con;
    }

    public function clpse(){
        mysql_close();
    }

}