<?php

if (isset($_REQUEST['Name']) && isset($_REQUEST['Pass']) &&  isset($_REQUEST['phone'])){
    $name=$_REQUEST['Name'];
    $pass=$_REQUEST['Pass'];
    $phone=$_REQUEST['phone'];
   
    try{
        $conn = new mysqli('localhost', 'root','','try2');
        $sql = "INSERT INTO log_sign (Name,pass,phone) VALUES (' $name','$pass',' $phone')";
        echo $sql;
        $result = $conn->query($sql);
        $conn->commit();
        
        $conn->close();

        header('Location:index.php');

    }
    catch (Exception $e) {
       echo $e;
    }
}
?>