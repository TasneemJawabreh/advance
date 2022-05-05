<?php
// -------------------------BOOK NOW----------------------------------------------------------
// && isset($_REQUEST['nowDestination']) && isset($_POST['myIn']) && isset($_POST['phoneNum'] )
//$sql = "INSERT INTO acc (years, month, day,	expenses,imports,earnings)VALUES ('$Y','$M','$D','$Ex','$I','$Er')";

if(isset($_REQUEST['myName']) && isset($_REQUEST['nowLocation']) && isset($_REQUEST['nowDestination']) && isset($_POST['myIn']) && isset($_POST['phoneNum'] ) ){
    
    
  $yourName= $_POST['myName'];
  $currentL=$_POST['nowLocation'];
  $currentD=$_POST['nowDestination'];
  $nump=$_POST['myIn'];
  $phone=$_POST['phoneNum'];

  try{
  
    $db = new mysqli('localhost', 'root','','try2');
    
    $qryStr="INSERT INTO info (name_c,l_ADDRESS,des,num_p,phone) VALUES ('$yourName','$currentL','$currentD','$nump','$phone')";
    // $sql = "INSERT INTO `info`(`name_c`, `I_ADDRESS` ,`des`,num_p`,`phone`) VALUES (``, `".$currentL."`,`".$currentD."`,`".$nump."`,`".$phone."`  )";
    //echo $qryStr;
    $result = $db->query($qryStr);
    $db->commit();
    $db->close();

  }
  catch (Exception $e){
     //echo $e;
  }
}
 

 ?>