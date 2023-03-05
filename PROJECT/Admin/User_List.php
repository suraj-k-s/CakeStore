
<?php
include("../Assets/Connection/Connection.php");
include("Head.php");

if(isset($_GET["delID"]))
{
	$delQry="delete from tbl_user where user_id='".$_GET["delID"]."'";
  if($conn->query($delQry))
  {
?>

	<script>
	alert("DELETED");
	window.location="User_List.php";
	</script>
<?php
  }
  else
  {
?>
	<script>
	alert("failed");
	window.location="User_List.php";
	</script>
<?php
  }
}
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User List</title>
</head>

<body>
<a href="HomePage.php">Home</a>
<div id="tab" align="center">
<form id="form1" name="form1" method="post" action="">
  <table width="1407" height="181" border="1" cellpadding="10">
    <tr>
      <th width="35" scope="col">SI</th>
      <th width="134" scope="col">DISTRICT</th>
      <th width="135" scope="col">PLACE</th>
      <th width="234" scope="col">NAME</th>
      <th width="84" scope="col">GENDER</th>
      <th width="200" scope="col">CONTACT</th>
      <th width="217" scope="col">EMAIL</th>
      <th width="172" scope="col">PHOTO</th>
      <!--<th width="172" scope="col">PROOF</th>-->
      <th width="172" scope="col">ACTION</th>
      
    </tr>
    
    <?php
  $selQry="select * from tbl_user u inner join tbl_place p on u.place_id=p.place_id inner join tbl_district d on
  p.district_id=d.district_id";
      
	  $row=$conn->query($selQry);
	  $i=0;
	  while($data=$row->fetch_assoc())
	  {
		  $i++;
		  
		 ?>
	  
  
	
	
	
	
	
    <tr>
      <td height="115"><?php echo $i; ?></td>
      <td><?php echo $data["district_name"]; ?></td>
      <td><?php echo $data["place_name"]; ?></td>
      <td><?php echo $data["user_name"]; ?></td>
      <td><?php echo $data["user_gender"]; ?></td>
      <td><?php echo $data["user_contact"]; ?></td>
      <td><?php echo $data["user_email"]; ?></td>
      <td><img src="../Assets/Files/User/<?php echo $data["user_photo"];?>"width="120"height="120"/></td>
      <!--<td><img src="../Assets/Files/User/<?php echo $data["user_photo"];?>"width="120"height="120"/></td>-->
      <td><a href="User_List.php?delID=<?php echo $data["user_id"];?>">delete</a></td>
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