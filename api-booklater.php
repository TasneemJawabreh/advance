<?php
 header('Access-Control-Allow-Origin: *');
 header('Content-Type: application/json');
 header('Access-Control-Allow-Methods: POST');
 header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');
 include_once('intialize.php');
 include_once('config.php');
 $post=new Post();

 $userDes=$_REQUEST['Destination-later'];
 $userTime=$_REQUEST['time-later'];
 $userDay= $_REQUEST['day'];
 $usermonth=$_REQUEST['month'];

 $result=$post->booklater();
 $num =$result->rowCount();
 
if($num>0){
    
    while($row=$result->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $day= date('d', strtotime($row['date']));
            $month= date('m', strtotime($row['date']));

            $trip=$row['tripnum'];
            // echo json_encode($trip);
            $des=$row['mydes'];
            
           
            if( $userDes==$des){
           // echo json_encode($trip);
              
               // echo "ansam";
              $i= $userTime;
             
             
             
            
               if($trip<=25){
                $i1=strtotime("-30 minutes" , strtotime($i));
                echo "<br/>";
                 
              echo date('h:i A',$i1).'<br>';
             
            }
            elseif($trip<=45)
            {
              $i2=strtotime("-45 minutes" , strtotime($i));
              echo "<br/>";
                 
              echo date('h:i A',$i2).'<br>';
                           
               }
               elseif($trip<=75)
               {
                $i3=strtotime("-60 minutes" , strtotime($i));
                 echo "<br/>";
                    
                 echo date('h:i A',$i3).'<br>';
                              
                  }
                  elseif($trip<=100)
                  {
                    $i4=strtotime("-80 minutes" , strtotime($i));
             
                    echo "<br/>";
                       
                    echo date('h:i A',$i4).'<br>';
                                 
                     }
          }
          
         }
    
  

 }
?>