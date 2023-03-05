
<?php
include("../Assets/Connection/Connection.php");
include("Head.php");

if(isset($_POST["btn_submit"]))
{
$sub=$_POST["txt_subcat"];	
$catid=$_POST["sel_category"];		
$insertqry="INSERT INTO tbl_subcat(subcat_name,cat_id) VALUES('".$sub."','".$catid."')";
if($conn->query($insertqry))
{
 ?>
    <script>
     alert("Inserted");
     window.location="SubCategory.php";
    </script>  
    
<?php
}
else
{
?>
<script>
alert("Failed");
 window.location="SubCategory.php";
</script>
<?php
}
}

if(isset($_GET["did"]))
{
	$del="DELETE FROM tbl_subcat WHERE subcat_id='".$_GET["did"]."'";
	if ($conn->query($del)) 
	{
	
	?>
        <script>
		alert("Data Deleted");
		window.location("SubCategory.php");
		</script>
        <?php
		
		}
		else{
			?>
            <script>
			alert("Failed");
			window.location("SubCategory.php");
		</script>
        <?php
			}
	}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sub Category</title>
</head>

<body>

<a href="HomePage.php">Home</a>
<center>
<div id="tab" align="center">
<form id="form1" name="form1" method="post" action="">
  <table width="552" height="282" border="1" cellpadding="10">
    <tr>
      <td width="200" scope="row">Category Name</td>
      <td width="300">
      <select name="sel_category" id="sel_category">
      <option value="">---select---</option>
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
      <td scope="row">Sub Category Name</td>
      <td><input type="text" name="txt_subcat" id="txt_subcat" /></td>
    </tr>
    
    <tr>
      <td colspan="2" scope="row"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      <input type="reset" name="btn_reset" id="btn_reset" value="Reset" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table border="1" cellpadding="10">
    <tr>
      <th scope="col">Sl.no</th>
      <th scope="col">Category</th>
      <th scope="col">Sub Category</th>
      <th scope="col">Action</th>
    </tr>
    
     <?php
	  $selQry="SELECT * FROM tbl_subcat s inner join tbl_category c on s.cat_id=c.cat_id";
     
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
      <td><a href="SubCategory.php?did=<?php echo $data["subcat_id"]?>">DELETE</a></td>
    </tr>
     <?php
	  }
	  ?>
  </table>
  <p>&nbsp;</p>
</form>
  </div>
</center>
</body>
<?php
include("Foot.php");
?>
</html>