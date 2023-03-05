<?php

include("../Assets/Connection/Connection.php");

include("Head.php");

?>
<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>
<div id="tab" align="center">
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>


var xValues = [
<?php 

  $sel="select * from tbl_product";
  $row=$conn->query($sel);
  while($data=$row->fetch_assoc())
  {
        echo "'".$data["prod_name"]."',";
      
  }

?>
];

var yValues = [
<?php 
  $sel="select * from tbl_product";
  $row=$conn->query($sel);
  while($data=$row->fetch_assoc())
  {
	  
	 $sel1="select sum(cart_qty) as id from tbl_cart ca inner join  tbl_product p on ca.prod_id=p.prod_id WHERE ca.prod_id='".$data["prod_id"]."'";
	  
	  $row1=$conn->query($sel1);
  while($data1=$row1->fetch_assoc())
	  {
			echo $data1["id"].",";
	  }
  }

?>
];



var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145",
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145",
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145",
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      label:"Product Wise",
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "All Product Sales"
    }
  }
});
</script>
<?php
include("Foot.php");
?>
</div>
</body>
</html>
