
<?php
session_start();
ob_start();
include("Head.php");
use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

	include("../Assets/Connection/Connection.php");
	if(isset($_POST["btn_proceed"]))
	{
		$address=$_POST["txt_address"];
		$pin=$_POST["txt_pin"];
		$contact=$_POST["txt_contact"];
		$date=$_POST["txt_date"];
		$email=$_SESSION["email"];
	
				$a = "update tbl_booking set booking_address='".$address."', booking_pin='".$pin."', booking_contact='".$contact."',booking_for_date='".$date."',delivery_time='".$_POST["txt_time"]."' where booking_id='".$_SESSION["bid"]."'";

//echo $a;	
			if($conn->query($a))
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
  
    $mail->addAddress($email);
  
    $mail->isHTML(true);
  
    $mail->Subject = "Booking Confirmed";
    $mail->Body = "Hello User your booking is successfully completed. ";
  if($mail->send())
  {
   // echo "Sended";
  }
  else
  {
    //echo "Failed";
  }
					if($_SESSION["pay"]=="1")
					{
						?>
                    <script>
						//alert('Payment Completed');
						window.location="Payment.php";
					</script>
	
		<?php
					}
					else
					{
						?>
                    <script>
						//alert('Payment Completed');
						window.location="MyBooking.php";
					</script>
	
		<?php
					}
				}
				else
				{
					echo "<script>alert('Failed')</script>";
				}
			
	}


  date_default_timezone_set("Asia/Kolkata"); 
  $today = date("Y-m-d H:i:s A");

  $date = date( "Y-m-d", strtotime($today)+24*60*60 );

	
	?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Booking Details</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <p><strong>Booking Details</strong></p>
    <table width="538" height="428" border="1" cellpadding="10">
      
      <tr>
        <th scope="row"><p>Address</p></th>
        <td><textarea name="txt_address" id="txt_address" cols="45" rows="5" required></textarea></td>
      </tr>
      <tr>
        <th scope="row">Pin</th>
        <td><input type="text" name="txt_pin" id="txt_pin" required pattern="[0-9]{6}"/></td>
      </tr>
      <tr>
        <th scope="row">Contact</th>
        <td><input type="text" name="txt_contact" id="txt_contact" required pattern="[7-9]{1}[0-9]{9}"/></td>
      </tr>
      <tr>
        <th scope="row">Delivery Date</th>
        <td><input type="date" name="txt_date"  min="<?php echo $date ?>" required/></td>
      </tr>
      <tr>
        <th scope="row">Delivery Time</th>
        <td><input type="time" name="txt_time"   required/></td>
      </tr>
      <tr>
        <th colspan="2" scope="row"><input type="submit" name="btn_proceed" id="btn_proceed" value="Proceed" /></th>
      </tr>
    </table>
    <p>&nbsp;</p>
  </div>
  <?php
 // echo $email;
  ?>
</form>
</body>
</html>

<?php
ob_flush();
include("Foot.php");
?>