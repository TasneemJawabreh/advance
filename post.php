<?php
include_once('config.php');
 class Post{
  public $connect='';
  public $table='log_sign';
 
  public $Name;
  public $pass;
  public $phone;
  public $result;
  public $name_c;
  public $l_ADDRESS;
  public $des;
  public $num_p;
  public $logName;
  public $logPass;
  public $yourName;
  public $currentL;
  public $currentD;
  public $nump;
  public $trip;

  function __construct()
  {
   $this->database_connection();
  }
 
  function database_connection()
  {
   $this->connect = new PDO("mysql:host=localhost;dbname=try2", "root", "");
  }

 
  public function login(){
    $query = "SELECT `Name`, `pass` FROM `log_sign`";

    $stmt= $this->connect->prepare($query);

    $stmt->execute();
    return $stmt;
   }


   public function booklater(){
      $query =" SELECT  `mydes`, `date`, `time` , `tripnum` FROM `booklater`";
  
      $stmt= $this->connect->prepare($query);
  
      $stmt->execute();
      return $stmt;
     }
     public function bestday(){
      $query = "SELECT  `date`, `trips` FROM `uber-jan-feb-foil`";
  
      $stmt= $this->connect->prepare($query);
  
      $stmt->execute();
      return $stmt;
     }

   public function create(){
   
     
    $query="INSERT INTO  log_sign (Name , pass , phone ) VALUES  (:Name, :pass, :phone)";

    $stmt= $this->connect->prepare($query);

    $stmt->bindParam(':Name',$this->Name);
    $stmt->bindParam(':pass',$this->pass);
    $stmt->bindParam(':phone',$this->phone);
     
     if( $stmt->execute()){
        return true;
     }
     else{
         printf("there is an error");
         return false;
     }
//    }
   }
   public function bookNow(){
    
   //  $this->name_c =htmlspecialchars(strip_tags($this->name_c));
   //  $this->l_ADDRESS =htmlspecialchars(strip_tags($this->l_ADDRESS));
   //  $this->des =htmlspecialchars(strip_tags($this->des));
   //  $this->num_p =htmlspecialchars(strip_tags($this->num_p));
   //  $this->phone =htmlspecialchars(strip_tags($this->phone)); 
    

    $query="INSERT INTO  info (name_c , l_ADDRESS , des ,num_p ,phone) VALUES  (:name_c, :l_ADDRESS, :des, :num_p, :phone )";
    $stmt= $this->connect->prepare($query);

     $stmt->bindParam(':name_c',$this->name_c);
     $stmt->bindParam(':l_ADDRESS',$this->l_ADDRESS);
     $stmt->bindParam(':des',$this->des);
     $stmt->bindParam(':num_p',$this->num_p);
     $stmt->bindParam(':phone',$this->phone);

  
     if( $stmt->execute()){
       
        return true;
     }
     else{
         printf("there is an error");
         return false;
     }
   }
}

?>