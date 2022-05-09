<?php
// -------best trip day-----
if (isset($_POST['trip'])){
    
    $count=0;
    $item=array();
    
    $minDay=0;
    $minT=1500;

    for($i=0; $i< 13; $i++){
      
        $item[$i]=0;
    }
    

    $userDay= date('d', strtotime($_POST['appt']));
    
    $usermonth= date('m', strtotime($_POST['appt']));
    
   $date=date_create($_POST['appt']);
   try{
   $conn = new mysqli('localhost', 'root','','try2');
   $sql = "SELECT  `date`, `trips` FROM `uber-jan-feb-foil`";
   
   $result = $conn->query($sql);
    $r1=0;
   if ($result->num_rows > 0) {
       
     
     while($row = $result->fetch_assoc()) {
       
       $day= date('d', strtotime($row['date']));

       $month= date('m', strtotime($row['date']));

       $trip=$row['trips']; 

      
        if($usermonth == $month && $trip < $minT ){
          
          $minDay=date(strtotime($row['date']));
          header('Location:index1.php');

       }
       
     }
  
                           } 
                        }
   catch (Exception $e) {

  }
}
?>