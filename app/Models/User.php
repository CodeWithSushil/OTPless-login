<?php 
namespace App\Models;
use PDO;

class User extends BaseModel{
	private $table_name = "users";
	public $id;
	public $name;
	public $email;
  public $ip;
  public $agent;

  public function register(){
    $query = "SELECT * FROM ".$this->table_name. " WHERE email = :email";
		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':email',$this->email);
		$stmt->execute();
		
		if($stmt->rowCount() > 0){
			return false; // user already exists
		}



		$query = "INSERT INTO ".$this->table_name. " (name,email,ip,agent) VALUES (:name,:email,:ip,:agent)";
		$stmt = $this->conn->prepare($query);

		//$this->password = password_hash($this->password, PASSWORD_DEFAULT);

		$stmt->bindParam(':name', $this->name);
		$stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':ip', $this->ip);
    $stmt->bindParam(':agent', $this->agent);

		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}


	public function login(){
		$query = "SELECT * FROM ".$this->table_name. " WHERE email = :email";
		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':email',$this->email);

    if($stmt->execute()){
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
			$this->id = $row['id'];
			$this->name = $row['name'];

			return true;
		}else{
			return false;
		}
	}

}
