<?php
use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  ob_start();
  include("Head.php");

include("../Assets/Connection/Connection.php");
if(isset($_POST["btn_submit"]))
{
$disid=$_POST["ddl_district"];
$placeid=$_POST["ddl_place"];
$name=$_POST["txt_name"];
$gender=$_POST["radio"];

$contact=$_POST["txt_num"];
$email=$_POST["txt_email"];
$password=$_POST["txt_pass"];


$photo=$_FILES["file_photo"]["name"];
$path=$_FILES["file_photo"]["tmp_name"];
move_uploaded_file($path,"../Assets/Files/User/".$photo);

$proof=$_FILES["file_proof"]["name"];
$path1=$_FILES["file_proof"]["tmp_name"];
move_uploaded_file($path,"../Assets/Files/User/".$photo);




$insertQry="INSERT INTO tbl_user(user_name,user_gender,user_contact,user_email,user_password,user_photo,user_proof,district_id,place_id)
VALUES('".$name."','".$gender."','".$contact."','".$email."','".$password."','".$photo."','".$proof."','".$disid."','".$placeid."')";
$selQrye="SELECT * FROM tbl_user where user_email='".$email."'";
$rowe=$conn->query($selQrye);
if(mysqli_num_rows($rowe)>0)
{
?>
<script>
  alert("Email already in use");
  location.href="UserRegistration.php";
  </script>

<?php
} 
else
{

  if($conn->query($insertQry))
{
require '../Assets/phpMail/src/Exception.php';
require '../Assets/phpMail/src/PHPMailer.php';
require '../Assets/phpMail/src/SMTP.php';
	
	 $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'deepzcakes@gmail.com'; // Your gmail
    $mail->Password = 'fmclbhyzdbnkcjil'; // Your gmail app password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
  
    $mail->setFrom('deepzcakes@gmail.com'); // Your gmail
  
    $mail->addAddress($_POST["txt_email"]);
  
    $mail->isHTML(true);
  
    $mail->Subject = "Account Created Successfully";
    $mail->Body = "Hello"." ".$name." "."Your Account is Created Successfully. ";
  if($mail->send())
  {
    echo "Sended";
  }
  else
  {
    echo "Failed";
  }
 ?>
    <script>
     alert("Inserted");
     window.location="Login.php";
    </script>  
    
<?php
}

else
{
?>
<script>
alert("Failed");
 window.location="UserRegistration.php";
</script>
<?php	
}
}
}
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New User</title>
</head>

<body>
  <div id="tab" align="center">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p><center><h2>USER REGISTRATION</h2></p>
  <table width="402" height="485" border="1">
    
    <tr>
      <td>Name:</td>
      <td><input type="text" name="txt_name" id="txt_name" required pattern="[a-zA-Z ]{2,}"/></td>
    </tr>
    <tr>
      <td>Gender:</td>
      <td><input type="radio" name="radio" id="radio_m" value="Male" checked />Male
         <input type="radio" name="radio" id="radio_f" value="Female" />
        Female</td>
    </tr>
    <tr>
      <td width="83">District:</td>
      <td width="170">
      <select name="ddl_district" id="ddl_district" onChange="getPlace(this.value)" required="required">
      <option value="">---select---</option> 
      <?php
	             $selQry="SELECT * FROM tbl_district";
				 $row=$conn->query($selQry);
				 while($data=$row->fetch_assoc())
				 {
      ?>					 
	  <option value="<?php echo $data["district_id"]; ?>"><?php echo $data["district_name"]; ?></option>
	  <?php
				 }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Place:</td>
      <td>
      <select name="ddl_place" id="ddl_place" required="required">
      <option value="">---select---</option>      
      </select></td>
    </tr>
    <tr>
      <td>Contact:</td>
      <td><input type="text" name="txt_num" id="txt_num" pattern="[0-9]{10}"/></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input type="email" name="txt_email" id="txt_email" autocomplete="off"/></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><input type="password" name="txt_pass" id="txt_pass"  required="required"/></td>
    </tr>
    <tr>
    <td>Photo:
    </td>
    <td><input type="file" name="file_photo" id="file_photo" />
    </td>
    
     
    <tr>
      <td colspan="2"><center><input type="submit" name="btn_submit" id="btn_submit" value="Submit" /></center></td>
    </tr>
  </table>
  </center>
  </form>
        </div>
</body>
<script src="../Assets/Jquery/jQuery.js"></script>
<script>
function getPlace(did)
{

	$.ajax({
	  url:"../Assets/AjaxPages/AjaxPlace.php?did="+did,
	  success: function(html){
		$("#ddl_place").html(html);
	  }
	});
}
</script>
<?php
ob_flush();
include("Foot.php")
?>

</html>
