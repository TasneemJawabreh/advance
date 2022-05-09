<?php
 header('Access-Control-Allow-Origin: *');
 header('Content-Type: application/json');
 header('Access-Control-Allow-Methods: POST');
 header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');
 include_once('intialize.php');
 include_once('config.php');

//C:\xampp\htdocs\advance-master\advance-master\intialize.php

//  $post=new Post($db);
 $post=new Post();

 if (isset($_REQUEST['logName'])&& isset($_REQUEST['logPassword']) ){
     
 $logName=$_REQUEST['logName'];
 $logPass=$_REQUEST['logPassword'];

 $result=$post->login();
 $num =$result->rowCount();
//  echo json_encode($result);
//  echo json_encode($num);
 if($num>0){
    
    while($row=$result->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $post->Name=$row['Name'];
        $post->pass=$row['pass'];
        if($post->Name==$logName && $post->pass==$logPass ){
            $value = "succesful";
            setcookie("myCookie1", $value);
            header("Location: http://localhost/advance-master/advance-master/index1.php");
         

        }
        else{
            //header('Location:index.php');

            //echo "user name or password are not correct";
            $value = "fail";
           setcookie("myCookie1", $value);
            header("Location: http://localhost/advance-master/advance-master/index1.php");
        }
    }

 }
 }
?>