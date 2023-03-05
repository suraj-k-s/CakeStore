<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
if(isset($_POST["btn_submit"]))
{
$name=$_POST["txt_name"];
$email=$_POST["txt_email"];
$password=$_POST["txt_password"];


$insertQry="INSERT INTO tbl_admin(admin_name,admin_email,admin_password)
VALUES('".$name."','".$email."','".$password."')";
 
  if($conn->query($insertQry))
{
 ?>
    <script>
     alert("Inserted");
     window.location="AdminRegistration.php";
    </script>  
    
<?php
}
else
{
?>
<script>
alert("Failed");
 window.location="AdminRegistration.php";
</script>
<?php	
}
}
if(isset($_GET["did"]))
{
	$del="DELETE FROM tbl_admin WHERE admin_id='".$_GET["did"]."'";
	if ($conn->query($del)) 
	{
	
	?>
        <script>
		alert("Data Deleted");
		window.location("AdminRegistration.php");
		</script>
        <?php
		
		}
		else{
			?>
            <script>
			alert("Failed");
			window.location("AdminRegistration.php");
		</script>
        <?php
			}
	}
?>	







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN REGISTRATION</title>
</head>

<body>
<a href="HomePage.php">Home</a>
<div id="tab" align="center">
<form id="form1" name="form1" method="post" action="">
  <p><center>
    <h2>ADMIN REGISTRATION</h2></center></p>
  <center>
  <table width="438" border="1" cellpadding="10">
    <tr>
      <td width="177" scope="row">Name:</td>
      <td width="209"><input type="text" name="txt_name" id="txt_name" /></td>
    </tr>
    <tr>
      <td scope="row">E-mail:</td>
      <td><input type="text" name="txt_email" id="txt_email" /></td>
    </tr>
    <tr>
      <td scope="row">Password:</td>
      <td><input type="password" name="txt_password" id="txt_password" /></td>
    </tr>
    <tr>
      <td colspan="2" scope="row" align="center"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="347" height="95" border="1" cellpadding="10">
    <tr>
      <th width="41" scope="col">Sl. No</th>
      <th width="49" scope="col">Name</th>
      <th width="81" scope="col">E-mail</th>
      <th width="76" scope="col">Action</th>
    </tr>
    <?php
	  $selQry="SELECT * FROM tbl_admin";
     
	  $row=$conn->query($selQry);
	  $i=0;
	  while($data=$row->fetch_assoc())
	  {
	   $i++;
	   
	  ?>
  
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $data["admin_name"]?></td>
      <td><?php echo $data["admin_email"]?></td>
      <td><a href="AdminRegistration.php?did=<?php echo $data["admin_id"]?>">DELETE</a></td>
    </tr>
    <?php
	  }
	  ?>
    
  </table>
  <p>&nbsp;</p>
  </center>
</form>
  </div>

<?php
include("Foot.php");
?>
</body>
</html>