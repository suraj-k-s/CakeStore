<?php
include("../Assets/Connection/Connection.php");
include("Head.php");


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product List</title>
</head>

<body>
<?php
include("../ASSETS/Connection/Connection.php");

if(isset($_GET["did"]))
{
	$del="DELETE FROM tbl_product WHERE Prod_id='".$_GET["did"]."'";
	if ($conn->query($del)) 
	{
	
	?>
        <script>
		alert("Data Deleted");
		window.location("Product.php");
		</script>
        <?php
		
		}
		else{
			?>
            <script>
			alert("Failed");
			window.location("Product.php");
		</script>
        <?php
			}
	}
	

?>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <a href="HomePage.php">Home</a>
  <div id="tab" align="center">
  <table width="1358" height="173" border="1" cellpadding="10" align="center">
    <tr>
      <th width="67" scope="col">Sl.No</th>
      <th width="160" scope="col">Category</th>
      <th width="175" scope="col">Sub Category</th>
      <th width="165" scope="col">Product</th>
      <th width="123" scope="col">Price</th>
      <th width="322" scope="col">Description</th>
      <th width="228" scope="col">Image</th>
      <th width="322" scope="col">Action</th>
    </tr>
       
      <?php
	  $selQry="SELECT * FROM tbl_product p inner join tbl_subcat s inner join tbl_category c  on p.subcat_id=s.subcat_id and s.cat_id=c.cat_id";
     
	  $row=$conn->query($selQry);
	  $i=0;
	  while($data=$row->fetch_assoc())
	  {
	   $i++;
	   
	  ?>
     <tr>
        <td><?php echo $i?></td>
        <td><?php echo $data["cat_name"]?></td>
        <td><?php echo $data["subcat_name"]?></td>
        <td><?php echo $data["prod_name"]?></td>
        <td><?php echo $data["prod_price"]?></td>
        <td><?php echo $data["prod_desc"]?></td>
        <td><img src="../Assets/Files/Product/<?php echo $data["prod_img"];?>"width="120"height="120"/></td>
        <td><a href="ProductList.php?did=<?php echo $data["prod_id"]?>">DELETE</a></td>
    
    </tr>
    <?php
	  }
	  ?>
  </table>
  <p>&nbsp;</p>
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
</script>
<?php
include("Foot.php");
?>


</html>