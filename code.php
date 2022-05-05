<?php
// date('d', strtotime($row['Date'])); 

// if (isset($_POST['appt'])){
 
//  $count=0;
//     $item=array();
    

//     for($i=0; $i<13; $i++){
//         $item[$i]=0;
//     }
    

//     $userDay= date('d', strtotime($_POST['appt']));
//     $usermonth= date('m', strtotime($_POST['appt']));
    
//    $date=date_create($_POST['appt']);
//    $conn = new mysqli('localhost', 'root','','try2');
//    $sql = "SELECT Date,Status,Time FROM try2";
//    $result = $conn->query($sql);

//    if ($result->num_rows > 0) {
       

//      while($row = $result->fetch_assoc()) {
       
//        $day= date('d', strtotime($row['Date']));
//        $month= date('m', strtotime($row['Date'])); 
//        $Status=$row[Status];
//        $time=date('H', strtotime($row['Time'])); 
      
//        if($day==$userDay &&  $usermonth== $month && $Status !="Cancelled")
//          $item[$time]=$item[$time]+1;

//      }
//       $min=$item[0];
//       for($i=0; $i<13; $i++){
//         if($item[$i] < $min) {
//             $min=$item[$i];
//         }
//     }
//       echo $min;
// $conn->close();
// } 
// } 
?>