<?php
 class Post{
  private $conn;
  private $table='log_sign';

  public $name;
  public $pass;
  public $phone;
  public function __construct($db){
      $this->conn=$db;

  }
  public function read(){
      //"SELECT `Name`, `pass` FROM `log_sign`";
    $query="SELECT `Name`, `pass` FROM `log_sign`";
    
     $stmt=$this->conn->prepare($query);
     $stmt->execute();

     return $stmt;
   }
}

?>