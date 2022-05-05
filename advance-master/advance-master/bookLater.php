<?php
if( isset($_REQUEST['Destination-later']) && isset($_REQUEST['Date-later']) && isset($_REQUEST['time-later']) ){

    //$userLoc=$_REQUEST['Location-later'];
    $userDes=$_REQUEST['Destination-later'];
    $userTime=$_REQUEST['time-later'];
    $userDay= date('d', strtotime($_POST['Date-later']));
    $usermonth= date('m', strtotime($_POST['Date-later']));
    
    try{
        $conn = new mysqli('localhost', 'root','','try2');
        $sql = "SELECT  `mydes`, `date`, `time` ,'tripnum' FROM `booklater`";
        
        $result = $conn->query($sql);
         $r1=0;
        if ($result->num_rows > 0) {
            
          
          while($row = $result->fetch_assoc()) {
            
            $day= date('d', strtotime($row['date']));
     
            $month= date('m', strtotime($row['date']));
             
            $des=$row['mydes'];
            $trip=$row['tripnum'];
            // echo "$$";
            

            // echo $userDes;
            // echo "$$";
            // echo $des;
            if( $userDes==$des){
              // echo "misk";
              if($trip<=25){
              $i= '12:00 am';
              $start=strtotime("-30 minutes" , strtotime($i));
              $end=strtotime("+30 minutes" , strtotime($i));
              
              for ($i=$start;$i<=$end;$i = $i + 15*60) 
              {
                  echo "<br/>";
                 echo date('h:i A',$i).'<br>';
              }
            }
              elseif($trip<=45)
            {
              //$timeback=$userTime-1;
              echo $timeback;
               }
            
          }
          
         }
          
                               } 
        
      
}
catch (Exception $e) {
  echo $e;
}

}
?>