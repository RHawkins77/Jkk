<?php

class Dao
{
	private $host = "us-cdbr-iron-east-04.cleardb.net";
	private $db = "heroku_941aeb476fe88e0";
	private $user = "baffcfe242cc7e";
	private $pass = "92200d6d59a8ace";
	
	public function getConnection ()
	{
		return new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
	}

	
	public function getUsers ()
	{
		$conn = $this->getConnection();
		return $conn->query("SELECT * FROM customer");
	}
	
	public function doesUserAndPasswordMatch($email, $password)
	{
		$conn = $this->getConnection();
		$stmt = $conn->prepare("SELECT email, customer_password FROM customer WHERE email = :email
								AND customer_password = :customer_password");
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':customer_password', $customer_password);
		try{
		$stmt->execute();
		return true;
		}catch(PDOException $e){
			return false;
		}
	}
	
	
	public function userExists($email)
	{
		$conn = $this->getConnection();
		$stmt = $conn->prepare("SELECT * FROM customer WHERE email = :email");
		$stmt->bindParam(':email', $email);
		$stmt->execute();
		if($stmt->fetchAll()){
			return true;
	}	else {
		return false;
	}
	}
	
	public function addUser($email, $password)
	{
		$conn = $this->getConnection();
		$query = "INSERT INTO customer(email, customer_password)
				  VALUES (:email, :password)";
				  
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $password);
		
		try{
		$stmt->execute();
		return true;
		}catch(PDOException $e){
			return false;
		}
	}	
}
?>
 