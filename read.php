<?php
 header('Access-Control-Allow-Origin: *');
 header('Content-Type: application/json');
include_once('intialize.php');
//C:\xampp\htdocs\advance-master\advance-master\intialize.php
 $post=new Post($db);
 $result=$post->read();
 $num =$result->rowCount();

 if($num > 0){

     $post_arr=array();
     $post_arr=array(['data']);

     while($row =$result->fetch(PDO::fetch_assoc)){
         extract($row);

         $post_item=array(
             'Name'=>$name,
             'pass'=>$pass,
             'phone'=>$phone
         );
         array_push($post_arr['data'],$post_item);
     }
     echo json_encode($post_arr);
 }
   else{
       echo json_encode(array('msg'=>'No post found'));
       echo json_encode($num);
   }

?>