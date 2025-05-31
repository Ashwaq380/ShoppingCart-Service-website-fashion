<?php

class DbConnect
{
    private $con;
 
    function connect()
    { 
        $this->con = new mysqli("localhost", "root", "", "online_shop");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            return null;
        }
        return $this->con;
    }
 
}