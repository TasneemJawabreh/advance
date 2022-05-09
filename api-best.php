<?php 
 header('Access-Control-Allow-Origin: *');
 header('Content-Type: application/json');
 header('Access-Control-Allow-Methods: POST');
 header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');
 include_once('intialize.php');
 include_once('config.php');

 $post=new Post();

 //if (isset($_REQUEST['trip'])){
    
    $count=10;
    $item=array();
    
    $minDay=0;
    $minT=1500;

    for($i=0; $i< 13; $i++){
      
        $item[$i]=0;
    }
   // $userDay= date('d', strtotime($_REQUEST['appt']));
    
   // $usermonth= date('m', strtotime($_REQUEST['appt']));

   $usermonth=$_REQUEST['monthe'];


   //$date=date_create($_REQUEST['appt']);
$f=0;
    
 

if($num>0){
    
    while($row=$result->fetch(PDO::FETCH_ASSOC)){
        extract($row);
       
       
        $day= date('d', strtotime($row['date']));

        $month= date('m', strtotime($row['date']));
 
        $trip=$row['trips']; 
       
        if($usermonth == $month && $trip < $minT ){
          
            $minDay=$day;
          $minT = $trip;
        // $f=1;  
        
         }
    }
    
    echo json_encode($minDay);
    echo "the best day is ";
    
    echo $minDay;

 }
//}

?>