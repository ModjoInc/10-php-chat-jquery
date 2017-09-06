<?php
include('errors.php');

class Connection{
  private $host = "localhost";
  private $dbname = "mini_chat";
  private $user = "root";
  private $password = "mvdtvw28";
  private $connection = null;

  public function getConnection() {
    try{
      $this->connection = new PDO(
        "mysql:host=$this->host; dbname=$this->dbname",
        $this->user,
        $this->password
      );
      return $this->connection;
    } catch (Exception $e) {
      echo $e->getMessage();
    }finally{
      $this->connection = null;
    }
  }
}

?>
