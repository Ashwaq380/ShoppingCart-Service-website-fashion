<?php
    session_start();
if (isset($_SESSION['id'])) {

	require_once 'DbOperation.php';
	$db = new DbOperation(); 
	if($db->addOrder($_SESSION['id'],$_SESSION['customerID'],$_SESSION['total'])){
        
        header("location: orders.php");
    }
}


?>