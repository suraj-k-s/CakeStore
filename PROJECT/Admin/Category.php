<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Category</title>
</head>
<?php
include("../Assets/Connection/Connection.php");
include("Head.php");


if (isset($_POST["btn_submit"]))
{
	
	$Category = $_POST["txt_cat"];
	$insQry = "insert into tbl_category(cat_name) values('".$Category."')";
	if($conn->query($insQry))
	{
		?>
			<script>
            	alert("Inserted");
				window.location="Category.php";
            </script>
		<?php
	}
	else
	{
		?>
			<script>
            	alert("Failed");
				window.location="Category.php";
            </script>
		<?php
	}
	
}

if(isset($_GET["did"]))
{
	$del="DELETE FROM tbl_category WHERE cat_id='".$_GET["did"]."'";
	if ($conn->query($del)) 
	{
	
	?>
        <script>
		alert("Data Deleted");
		window.location("Category.php");
		</script>
        <?php
		
		}
		else{
			?>
            <script>
			alert("Failed");
			window.location("Category.php");
		</script>
        <?php
			}
	}

?>
<body>
<div align="center">
<a href="HomePage.php">Home</a>
<h1>Category</h1><br>
<div id="tab" align="center">
<form method="POST">
<table width="385" height="146" border="1" cellpadding="10">
  <tr>
    <td width="151"> Category:</td>
    <td width="182"><input type="text" name="txt_cat" required="required" id="txt_cat" /></td>
  </tr>
  <tr>
    <td colspan="2"><center><input type="submit" name="btn_submit" id="btn_submit" value="Submit" /></center></td>
    </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="361" height="128" border="1" cellpadding="10">
  <tr>
    <th width="56" scope="col">Sl. No</th>
    <th width="148" scope="col">Category</th>
    <th width="41" scope="col">Action</th>
  </tr>
  
   <?php
	  $selQry="SELECT * FROM tbl_category";
     
	  $row=$conn->query($selQry);
	  $i=0;
	  while($data=$row->fetch_assoc())
	  {
	   $i++;
	   
	  ?>
  
  <tr>
    <td><?php echo $i?></td>
    <td><?php echo $data["cat_name"]?></td>
    <td><a href="Category.php?did=<?php echo $data["cat_id"]?>">DELETE</a></td>
  </tr>
   <?php
	  }
	  ?>
</table>
<p>&nbsp;</p>

</form>
</div>
<?php
include("Foot.php");
?>
</body>
</html>