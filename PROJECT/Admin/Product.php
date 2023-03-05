<?php
include("../Assets/Connection/Connection.php");
include("Head.php");

if(isset($_POST["btn_submit"]))
{
$sub=$_POST["sel_category"];	
$prodname=$_POST["txt_name"];
$prodprice=$_POST["txt_price"];	
$proddesc=$_POST["txt_desc"];	  
$subcat=$_POST["sel_subcat"];	

$photo=$_FILES["file_image"]["name"];
$path=$_FILES["file_image"]["tmp_name"];
move_uploaded_file($path,"../Assets/Files/Product/".$photo);


$insertqry="INSERT INTO tbl_product(prod_name,prod_price,prod_desc,subcat_id,prod_img) VALUES('".$prodname."','".$prodprice."','".$proddesc."','".$subcat."','".$photo."')";
echo $insertqry;

if($conn->query($insertqry))
{
 ?>
    <script>
     alert("Inserted");
     window.location="Product.php";
    </script>  
    
<?php
}
else
{
?>	
<script>
alert("Failed");
 window.location="Product.php";
</script>
<?php
}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Product</title>
</head>

<body>
<a href="HomePage.php">Home</a>
<div id="tab" align="center">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  
  <table width="635" height="443" border="1" cellpadding="10" align="center">
    <tr>
      <td width="208" height="47" scope="row"><div align="left">Category</div></td>
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
      <td height="47" scope="row"><div align="left">Subcategory</div></td>
      <td><select name="sel_subcat" id="sel_subcat">
      <option value="">--SELECT--</option>
      
       
       
	  </select></td>
    </tr>
    <tr>
      <td height="48" scope="row"><div align="left">Product Name</div></td>
      <td>
      <input type="hidden" name="txtid" value="<?php echo $eid?>" />
      <input type="text" name="txt_name" id="txt_name" /></td>
    </tr>
    <tr>
      <td height="47" scope="row"><div align="left">Price</div></td>
      <td><input type="text" name="txt_price" id="txt_price" /></td>
    </tr>
    <tr>
      <td height="120" scope="row"><div align="left"> Description</div></td>
      <td><textarea name="txt_desc" id="txt_desc" cols="23" rows="3"></textarea></td>
    </tr>
    <tr>
      <td height="49" scope="row"><div align="left">Image</div></td>
      <td><input type="file" name="file_image" id="file_image" /></td>
    </tr>
    <tr>
      <td height="67" colspan="2" scope="row"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
          <input type="submit" name="btn_reset" id="btn_reset" value="Reset" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  
  <p>&nbsp;</p>
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
</script>

<?php
include("Foot.php");
?>
</html>