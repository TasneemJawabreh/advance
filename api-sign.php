<?php
 header('Access-Control-Allow-Origin: *');
 header('Content-Type: application/json');
 header('Access-Control-Allow-Methods: POST');
 header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');
 include_once('intialize.php');
 include_once('config.php');


 $post=new Post();



 if (isset($_REQUEST['Name']) && isset($_REQUEST['Pass']) &&  isset($_REQUEST['phone'])){
    
    $Name=$_REQUEST['Name'];
    $pass=$_REQUEST['Pass'];
    $phone=$_REQUEST['phone'];

    $post->Name=$Name;
    $post->pass= $pass;
    $post->phone= $phone;


 if($post->create()){
     echo json_encode(array('msg'=>'Post created'));
     $value = "signup succesfully";
     setcookie("myCookie1", $value);
     header("Location: http://localhost/advance-master/advance-master/index.php");
  
 }
  else {
    echo json_encode(array('msg'=>'Post not created'));
    $value = "sign fail";
     setcookie("myCookie1", $value);
     header("Location: http://localhost/advance-master/advance-master/index.php");
  }
}
?>