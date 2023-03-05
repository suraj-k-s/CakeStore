
<?php
include("../Assets/Connection/Connection.php");
include("Head.php");


if(isset($_POST["btn_submit"]))
{
$offname=$_POST["txt_offername"];	
$frmdt=$_POST["txt_frmdate"];
$todt=$_POST["txt_todate"];		
$insertqry="INSERT INTO tbl_offer(offer_name,offer_frm_date,offer_to_date,offer_frm_time,offer_to_time) VALUES('".$offname."','".$frmdt."','".$todt."','".$_POST["txt_ftime"]."','".$_POST["txt_totime"]."')";
if($conn->query($insertqry))
{
 ?>
    <script>
     alert("Inserted");
     window.location="OfferDetails.php";
    </script>  
    
<?php
}
else
{
?>
<script>
alert("Failed");
 window.location="OfferDetails.php";
</script>
<?php
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OFFER</title>
</head>

<body onload="time()">
<div id="tab" align="center">
<form id="form1" name="form1" method="post" action=""> 
  <center><p><h2>NEW OFFER </h2></p></center>
 <center> <table width="390" height="400" border="1" cellpadding="10">
    <tr>
      <td width="155" scope="row">Offer Name</th>
      <td width="183"><input type="text" name="txt_offername" required id="txt_offername" /></td>
    </tr>
    <tr>
      <td scope="row">From Date</th>
      <td><input type="date"  name="txt_frmdate" id="frmdate" required min="<?php echo date("Y-m-d") ?>"  /></td>
    </tr>
    <tr>
      <td scope="row">To Date</th>
      <td><input type="date"  name="txt_todate" id="todate" required min="<?php echo date("Y-m-d") ?>" /></td>
    </tr>
    <tr>
      <td scope="row">From Time</th>
      <td><input type="time"  name="txt_ftime" required onchange="document.getElementById('txt_totime').min=this.value" id="txt_ftime"/></td>
    </tr>
     <tr>
      <td scope="row">To Time</th>
      <td><input type="time"  name="txt_totime" required  id="txt_totime"/></td>
    </tr>
    <tr>
      <td colspan="2" scope="row"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" /> 
          <input type="reset" name="btn_cancel" id="btn_cancel" value="Cancel" /></th>
    </tr>
  </table>
  </center>
</form>
</div>
</body>
<?php
include("Foot.php");
?>
</html>
