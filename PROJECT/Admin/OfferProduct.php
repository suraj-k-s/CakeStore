<?php
include("../Assets/Connection/Connection.php");
include("Head.php");

if(isset($_POST["btn_submit"]))
{
$prod=$_POST["sel_prod"];	
$offer=$_POST["sel_offer"];	
$offerprice=$_POST["txt_price"];	
$insertqry="INSERT INTO tbl_offer_product(offer_id,prod_id,offer_prod_price) VALUES('".$offer."','".$prod."','".$offerprice."')";
echo $insertqry;

if($conn->query($insertqry))
{
 ?>
    <script>
     alert("Inserted");
     window.location="OfferProduct.php";
    </script>  
    
<?php
}
else
{
?>
<script>
alert("Failed");
 window.location="OfferProduct.php";
</script>
<?php
}
}
?>
<?php
if(isset($_GET["did"]))
{
	$del="DELETE FROM tbl_offer_product WHERE offer_prod_id='".$_GET["did"]."'";
	if ($conn->query($del)) 
	{
	
	?>
        <script>
		alert("Data Deleted");
		window.location("OfferProduct.php");
		</script>
        <?php
		
		}
		else{
			?>
            <script>
			alert("Failed");
			window.location("OfferProduct.php");
		</script>
        <?php
			}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Offer Product</title>
</head>

<body>
<div id="tab" align="center">
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <h2><u>OFFER PRODUCTS</u></h2>
    <p>&nbsp;</p>
    <table width="361" height="434" border="1" cellpadding="10">
      <tr>
        <th width="156" scope="row">Category</th>
        <td width="234"><select name="sel_category" id="sel_category" onChange="getSub(this.value)">
      <option value="">---SELECT---</option>
      <?php
   					$selQry="select * from tbl_category";
   					$row=$conn->query($selQry);
   					 while($data=$row->fetch_assoc())
   						{
		?>
          
      <option value="<?php echo $data["cat_id"];?>"><?php echo $data["cat_name"];?> </option>
      <?php
	  
						}
						?>
      </select></td>
      </tr>
      <tr>
        <th scope="row">Sub Category</th>
        <td><select name="sel_subcat" id="sel_subcat" onChange="getProd(this.value)">
        <option value="">---SELECT---</option>
        </select></td>
      </tr>
      <tr>
        <th scope="row">Product</th>
        <td><select name="sel_prod" id="sel_prod">
               <option value="">---SELECT---</option>
        </select></td>
      </tr>
      <tr>
        <th scope="row">Offer</th>
        <td><select name="sel_offer" id="sel_offer">
         <option value="">---SELECT---</option>
      <?php
   					$selQry="select * from tbl_offer";
   					$row=$conn->query($selQry);
   					 while($data=$row->fetch_assoc())
   						{
		?>
          
      <option value="<?php echo $data["offer_id"];?>"><?php echo $data["offer_name"];?> </option>
      <?php
	  
						}
						?>
        </select></td>
      </tr>
      <tr>
        <th scope="row">Price</th>
        <td><input type="text" name="txt_price" id="txt_price" /></td>
      </tr>
      <tr>
        <th colspan="2" scope="row"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
        <input type="reset" name="btn_reset" id="btn_reset" value="Reset" /></th>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table width="596" height="153" border="1" cellpadding="10">
      <tr>
        <th width="52" scope="col">Sl. No</th>
        <th width="147" scope="col">Product</th>
        <th width="138" scope="col">Offer</th>
        <th width="62" scope="col">Price</th>
        <th width="73" scope="col">Action</th>
      </tr>
       <?php
  $selQry="select * from tbl_offer_product o INNER JOIN tbl_product p ON o.prod_id=p.prod_id INNER JOIN tbl_offer u ON u.offer_id=o.offer_id";
      
	  $row=$conn->query($selQry);
	  $i=0;
	  while($data=$row->fetch_assoc())
	  {
		  $i++;
		  
		 ?>
	  
  
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $data["prod_name"]; ?></td>
        <td><?php echo $data["offer_name"]; ?></td>
        <td><?php echo $data["offer_prod_price"]; ?></td>
        <td><a href="OfferProduct.php?did=<?php echo $data["offer_prod_id"]?>">DELETE</a></td>
      </tr>
<?php
	  }
	  ?>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
</form>
  </div>
</body>
<script src="../Assets/Jquery/jQuery.js"></script>
<script>
function getSub(cid)
{

	$.ajax({
	  url:"../Assets/AjaxPages/AjaxSubCategory.php?sid="+cid,
	  success: function(html){
		$("#sel_subcat").html(html);
	  }
	});
}
function getProd(sid)
{

	$.ajax({
	  url:"../Assets/AjaxPages/AjaxProduct.php?pid="+sid,
	  success: function(html){
		$("#sel_prod").html(html);
	  }
	});
}
</script>
<?php
include("Foot.php");
?>
</html>