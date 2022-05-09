<?php
  
  try {
    $conn = new mysqli('localhost', 'root','','try2');
    $sql = "SELECT `Status` FROM `web`";
    $d1 = 0;
    $d2 = 0;
    $d3 = 0;
    
    $result = $conn->query($sql);
     
    if ($result->num_rows > 0) {
        
      
      while($row = $result->fetch_assoc()) {
       
        $st=$row['Status'];
      
        
     

        if ($row['Status'] == 'Cancelled') {
            $d1=$d1+1;
           


        } elseif ($row['Status'] == 'Arrived') {
            $d2=$d2+1;

        } elseif ($row['Status'] == 'Assigned') {
            $d3=$d3+1;

        }   
         




    }


     
}}
 
 catch (Exception $e) {
   echo $e;
 }
?>

<!DOCTYPE html>
<html lang="en-US">
<body>

<h1>percentage for each status after book a car</h1>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

var myJSVar = <?php echo json_encode($d1); ?>;
    var x0=parseInt(myJSVar);
    var myJSVar = <?php echo json_encode($d2); ?>;
    var x1=parseInt(myJSVar);
    var myJSVar = <?php echo json_encode($d3); ?>;
    var x2=parseInt(myJSVar);
   



// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['status', 'count'],
  ['cancelled', 8],
  ['arrived', 2],
  ['assigned', 4]
  
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'status ', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<form class="ret" name="ret"  method="GET" action="index1.php" >
                            
                            <br><br>
                            <input type="submit" value="return"  style="font-family: Cursive;" />

                       
                        
                            
                        </form>
</body>
</html>


