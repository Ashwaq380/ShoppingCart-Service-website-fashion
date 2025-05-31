
<?php
session_start();
    require_once 'DbOperation.php';
	$db = new DbOperation(); 
    if ($_POST['email'] == "admin@email.com" && $_POST['password'] == "admin123123") {
        $_SESSION['admin'] = 1;
        header("location: adminHome.php");
    }
    $id = $db->login($_POST['email'],$_POST['password']);
    if(isset($id)){
         $_SESSION['customerID'] = $id;   
         header("location: index.php");
    }
    

    else{
        header("location: login.php?error=true");
    }

?>