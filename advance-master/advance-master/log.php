<?php
if (isset($_REQUEST['logName'])&& isset($_REQUEST['logPassword']) ){
    $logName=$_REQUEST['logName'];
    $logPass=$_REQUEST['logPassword'];

    try{
        $conn = new mysqli('localhost', 'root','','try2');
        $sql = "SELECT `Name`, `pass` FROM `log_sign`";
        
        $result = $conn->query($sql);
         $r1=0;
        if ($result->num_rows > 0) {
            
          
          while($row = $result->fetch_assoc()) {
           
            $name=$row['Name'];
            $pass=$row['pass'];

            if($name== $logName && $pass==$logPass){
              header('Location:index1.php');
            }
            else{
                echo "user name or password are not correct";
            }
          }
        }
    }
    catch (Exception $e) {
       echo $e;
    }
}
?>