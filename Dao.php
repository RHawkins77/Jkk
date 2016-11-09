<?php
phpinfo();
class Dao {
	
	private $host = us-cdbr-iron-east-04.cleardb.net;
	private $db = heroku_941aeb476fe88e0;
	private $user = baffcfe242cc7e;
	private $pass = 5d198c3d;
	
	
	public function getConnection () {
		return
				new PDO( "mysql:us-cdbr-iron-east-04={$this->host};heroku_941aeb476fe88e0={$this->db}", $this->user,
				$this->pass);	
}
  public function getProducts () {
    $conn = $this->getConnection();
    return $conn->query("SELECT id, name FROM product");
  }

  public function getProduct ($id) {
    $conn = $this->getConnection();
    $getQuery = "SELECT id, name, description, image_path FROM product WHERE id = :id";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":id", $id);
    $q->execute();
    return reset($q->fetchAll());
  }

  public function saveProduct ($name, $description, $imagePath) {
    $conn = $this->getConnection();
    $saveQuery =
        "INSERT INTO product
        (name, description, image_path)
        VALUES
        (:name, :description, :imagePath)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":name", $name);
    $q->bindParam(":description", $description);
    $q->bindParam(":imagePath", $imagePath);
    $q->execute();
  }

}


?> 