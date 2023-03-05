
<?php
ob_start();
include("Head.php");
session_start();
include("../Assets/Connection/Connection.php");
 $selqry="select * from tbl_booking b inner join tbl_cart c on c.booking_id=b.booking_id inner join tbl_product p on p.prod_id=c.prod_id where booking_status=2 and cart_status=1 and  b.booking_id='".$_SESSION["bid"]."'";
$result=$conn->query($selqry);  
  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Galerie DArt::My Booking</title>
</head>

<body>
<div id="tab" align="center">
<h1>Payed List</h1>

<form id="form1" name="form1" method="post" action="">
  <table border="1">
    <tr>
      <td>SlNO</td>
      <td>Name</td>
      <td>Photo</td>
      <td>Quantity</td>
      <td>Price</td>
      <td>Total amount</td>
      <td>Status</td>
      <td>Invoice</td>
    </tr>
     <?php
   $i=0;
  while($row=$result->fetch_assoc())
  {

    $selO="select * from tbl_offer_product op inner join tbl_offer o on o.offer_id=op.offer_id  where prod_id='".$row["prod_id"]."' and curdate() between offer_frm_date and offer_to_date and curtime() between offer_frm_time and offer_to_time";
    $rowO=$conn->query($selO);
    if($dataO=$rowO->fetch_assoc())
    {
    $Price=$dataO["offer_prod_price"];
     
    }
    else
    {
      $Price=$row["prod_price"];
    }

    
    $qty=$row["cart_qty"];
  $totalamt=$qty*$Price;
     $i++;
  ?>
  <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $row["prod_name"];?></td>
          <td><img src="../Assets/Files/Product/<?php echo $row["prod_img"];?>" width="100" height="100" /></td>
          <td><?php echo $row["cart_qty"];?></td>
          <td><?php echo $Price;?></td>
          <td><?php echo $totalamt;?></td>
          <td>
          <?php
                
          if($row["booking_status"]==1 && $row["cart_status"]==0)
          {
            echo "Payment Pending....";
          }
          else if($row["booking_status"]==2 && $row["cart_status"]==1)
          {
            ?>
                        Payment Completed 
                        <?php
          }
          else if($row["booking_status"]==2 && $row["cart_status"]==2)
          {
            ?>
                        Product Packed 
                        <?php
          }
          else if($row["booking_status"]==2 && $row["cart_status"]==3)
          {
            ?>
                        Product Shipped 
                        <?php
          }
          else if($row["booking_status"]==2 && $row["cart_status"]==4)
          {
            ?>
                        Order Completed 
                        <?php
          }
        
        
        ?>
          </td>
          <td><a href="Invoice.php?Bid=<?php echo $row["cart_id"] ?>&amount=<?php echo $totalamt ?>">Download</a></td>

  </tr>
  <?php
  }
  ?>
  </table>
</form>
</div>
</body>
<?php
include("Foot.php");
?>
</html>

