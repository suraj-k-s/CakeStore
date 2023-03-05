<?php
ob_start();
include("Head.php");
include("../Assets/Connection/Connection.php");

session_start();

if(isset($_POST["btn_submit"]))
{
	$subject=$_POST["txt_subj"];
	$description=$_POST["txt_desc"];
	$user=$_SESSION["lgid"];
	

$insertQry="INSERT INTO tbl_complaint(comp_sub,comp_desc,user_id)
VALUES('".$subject."','".$description."','".$user."')";
 
  if($conn->query($insertQry))
{
 ?>
    <script>
     alert("Inserted");
     //window.location="Complaint.php";
    </script>  
    
<?php
}

else
{
?>
<script>
alert("Failed");
 window.location="Complaint.php";
</script>
<?php	
}
}
?>	




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Complaint Registration</title>
</head>

<body>
<center>
<h2>Complaint Registration</h2>
<form id="form1" name="form1" method="post" action="">
  <table width="440" height="258" border="1" cellpadding="10">
    <tr>
      <th width="156" scope="row">Subject:</th>
      <td width="232"><input type="text" name="txt_subj" id="txt_subj" /></td>
    </tr>
    <tr>
      <th scope="row">Description:</th>
      <td><textarea name="txt_desc" id="txt_desc" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <th height="45" colspan="2" scope="row"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" /></th>
      </tr>
  </table>
  
</form>
</center>
</body>
</html>
<?php
ob_flush();
include("Foot.php");
?>