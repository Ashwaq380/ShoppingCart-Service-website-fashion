
<?php
session_start();
$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

        $fileName = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileExtension = explode('.', $fileName)[1];
        $fileExtension = strtolower($fileExtension); 

        if (!in_array($fileExtension, $allowedExtensions)) {
            die('Invalid file type. Please upload an image (jpg, jpeg, png, or gif).');
        }
        $newFileName = uniqid('', true) . '.' . $fileExtension;
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            if (!mkdir($uploadDir, 0775, true)) {
                die('Failed to create upload directory.');
            }
        }
        $uploadPath = $uploadDir . $newFileName;
        move_uploaded_file($fileTmpName, $uploadPath);

    require_once 'DbOperation.php';
	$db = new DbOperation(); 
    if($db->addProduct($_POST['productName'],$_POST['category'],$_POST['price'],$uploadPath)){
         header("location: adminHome.php");
    }

    else{
        header("location: adminHome.php?error=true");
    }

?>