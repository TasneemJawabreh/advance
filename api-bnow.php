
<?php
 header('Access-Control-Allow-Origin: *');
 header('Content-Type: application/json');
 header('Access-Control-Allow-Methods: POST');
 header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');
 include_once('intialize.php');
 include_once('config.php');

/*
public $name_c;
  public $l_ADDRESS;
  public $des;
  public $num_p;
*/
 $post=new Post();
//if(isset($_REQUEST['myName']) && isset($_REQUEST['nowLocation']) && isset($_REQUEST['nowDestination']) && isset($_POST['myIn']) && isset($_POST['phoneNum'] ) ){
//  $data=json_decode(file_get_contents("php://input"));

//  $post->name_c=$data->name_c;
//  $post->l_ADDRESS=$data->l_ADDRESS;
//  $post->des=$data->des;
//  $post->num_p=$data->num_p;
//  $post->phone=$data->phone;
  $yourName= $_REQUEST['myName'];
  $currentL=$_REQUEST['nowLocation'];
  $currentD=$_REQUEST['nowDestination'];
  $nump=$_REQUEST['myIn'];
  $phone=$_REQUEST['phoneNum'];

  $post->name_c=$yourName;
  $post->l_ADDRESS=$currentL;
  $post->des=$currentD;
  $post->num_p=$nump;
  $post->phone=$phone;
   //echo json_encode($post->name_c);
//  echo json_encode($pass);
//  echo json_encode($phone);

 if($post->bookNow()){
 
     echo json_encode(array('msg'=>'Post booked'));
     //redirect(http://localhost/advance-master/advance-master/index1.php?);
     $value = "booked";
     setcookie("myCookie", $value);
     header("Location: http://localhost/advance-master/advance-master/index1.php");
     
 }
  else {
    echo json_encode(array('msg'=>'Post not booked'));
    $value = "notbooked";
    setcookie("myCookie", $value);
    header("Location: http://localhost/advance-master/advance-master/index1.php");
    
  }
 
//}
?>
