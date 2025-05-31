<?php

class DbOperation

{
    private $con;
 
    function __construct()
    {
        require_once dirname(__FILE__) . '/DbConnect.php';
        $db = new DbConnect();
        $this->con = $db->connect();
    }

	public function getProducts(){
		$stmt = $this->con->prepare("SELECT * FROM products");
		$stmt->execute();
		$stmt->bind_result($id, $productName,$category, $price,$image);
		$rows = array();
		
		while($stmt->fetch()){
			$temp = array(); 
			$temp['id'] = $id; 
			$temp['productName'] = $productName; 
			$temp['category'] = $category; 
			$temp['price'] = $price;
			$temp['image'] = $image;
			array_push($rows, $temp);
		}
		return $rows; 
	}



	public function addOrder($productID, $customerID,$total){ 
		$stmt = $this->con->prepare("INSERT INTO `orders` (`productID`, `customerID`, `totalPrice`) VALUES (?, ?, ?);");
		$stmt->bind_param("sss",$productID, $customerID,$total);
		if($stmt->execute())
			return true; 
		return false;
		 
	}
	
	
	
	public function addProduct($productName, $category,$price,$image){ 
		$stmt = $this->con->prepare("INSERT INTO `products` (`productName`, `category`, `price`, `image`) VALUES (?, ?, ?,?);");
		$stmt->bind_param("ssss",$productName, $category,$price,$image);
		if($stmt->execute())
			return true; 
		return false; 
	}

	public function signup($name, $email,$password){ 
		$stmt = $this->con->prepare("INSERT INTO `customers` (`name`, `email`, `password`) VALUES (?, ?, ?);");
		$stmt->bind_param("sss",$name, $email,$password);
		if($stmt->execute())
			return true; 
		return false; 
	}
	
	public function login($email,$pass){
		$stmt = $this->con->prepare("SELECT id, password from customers where email = ?");
		$stmt->bind_param("s",$email);
		$userInfo = array();
		$stmt->execute();
		$stmt->bind_result($id,$passHashed);
		$stmt->fetch();
		if (password_verify($pass, $passHashed)) {
			return $id;
		}
		else 
		return null;
		
	}


	public function getOrders($customerID){
		$stmt = $this->con->prepare("SELECT orders.ID, products.productName, products.category, products.image, 
		orders.totalPrice from orders inner join products on orders.productID = products.ID  where orders.customerID = ?");
		$stmt->bind_param("s",$customerID);
		$userInfo = array();
		$stmt->execute();
		$stmt->bind_result($OrderID, $productName, $category,$image,$total);
		while($stmt->fetch()){
			$temp = array(); 
			$temp['OrderID'] = $OrderID; 
			$temp['productName'] = $productName; 
			$temp['category'] = $category; 
			$temp['total'] = $total;
			$temp['image'] = $image;
		 array_push($userInfo, $temp);
	}
		return $userInfo;
	}
}

