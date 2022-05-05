<?php
  
  try {
    $conn = new mysqli('localhost', 'root','','try2');
    $sql = "SELECT `dispatching_base_number`,`active_vehicles` FROM `uber-jan-feb-foil`";
    $d1 = 0;
    $d2 = 0;
    $d3 = 0;
    $d4 = 0;
    $d5 = 0;
    $d6 = 0;
    $d7 = 0;
    $d8 = 0;
    $d9 = 0;
    $result = $conn->query($sql);
     
    if ($result->num_rows > 0) {
        
      
      while($row = $result->fetch_assoc()) {
       
        $dispatch=$row['dispatching_base_number'];
      
        $active=$row['active_vehicles'];
     

        if ($row['dispatching_base_number'] == 'B02512') {
            $d1=$d1+$active;
           


        } elseif ($row['dispatching_base_number'] == 'B02765') {
            $d2=$d2+$active;

        } elseif ($row['dispatching_base_number'] == 'B02764') {
            $d3=$d3+$active;

        } elseif ($row['dispatching_base_number'] == 'B02682') {
            $d4=$d4+$active;

        } elseif ($row['dispatching_base_number'] == 'B02617') {
            $d5=$d5+$active;

        } 
        elseif ($row['dispatching_base_number'] == 'B02598') {
            $d6=$d6+$active;

        } 




    }


     
}}
 
 catch (Exception $e) {
   echo $e;
 }
?>

<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body>

<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var myJSVar = <?php echo json_encode($d1); ?>;
    var x0=parseInt(myJSVar);
    var myJSVar = <?php echo json_encode($d2); ?>;
    var x1=parseInt(myJSVar);
    var myJSVar = <?php echo json_encode($d3); ?>;
    var x2=parseInt(myJSVar);
    var myJSVar = <?php echo json_encode($d4); ?>;
    var x3=parseInt(myJSVar);
    var myJSVar = <?php echo json_encode($d5); ?>;
    var x4=parseInt(myJSVar);
    var myJSVar = <?php echo json_encode($d6); ?>;
    var x5=parseInt(myJSVar);
    

var xValues = ["B02512", "B02765", "B02764", "B02682", "B02617","B02598"];
var yValues = [x0, x1, x2, x3, x4,x5];
var barColors = ["red", "green","blue","orange","brown","yellow"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Active Vehicle for each dispatch"
    }
  }
});
</script>

</body>
</html>
