<?php
 $name=" ";
 $ta=0;
 $da=0;
 $hra=0;
 $lic=0;
 $pf=0;
 $net=0;
 $salary=0;
 $gender="";
 $status="";
  if(isset($_POST["btn_calculate"]))
  {
	  $fname=$_POST["txt_name1"];
	  $lname=$_POST["txt_name2"];
	  $gender=$_POST["radio"];
	  $status=$_POST["status"];
	  $salary=$_POST["txt_salary"];
	  
	  if($gender=="male")
	  {
		  $name="Mr. ".$fname." ".$lname;
		  
		  }
	else
	{
		if ($status=="single")
		{
			$name="Ms. ".$fname." ".$lname;
		}
		
		else{
			$name="Mrs. ".$fname." ".$lname;
		}
	  	  
	  }
	  if($salary>=20000)
	  {
		$ta=$salary*40/100;
		$da=$salary*35/100;
		$hra=$salary*30/100;
		$lic=$salary*25/100;
		$pf=$salary*20/100;
		$net=(($salary+$ta+$da+$hra+$lic+$pf)-($lic+$pf));
	  }
	  
	  if($salary<=10000)
	  {
		$ta=$salary*30/100;
		$da=$salary*25/100;
		$hra=$salary*20/100;
		$lic=$salary*15/100;
		$pf=$salary*10/100;
		$net=(($salary+$ta+$da+$hra+$lic+$pf)-($lic+$pf));
	  }
	  
	  if($salary>10000&&$salary<20000)
	  {
		$ta=$salary*35/100;
		$da=$salary*30/100;
		$hra=$salary*25/100;
		$lic=$salary*20/100;
		$pf=$salary*15/100;
		$net=(($salary+$ta+$da+$hra+$lic+$pf)-($lic+$pf));
	  }
  }
  
  
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="">
  <table width="391" height="302" border="1" cellpadding="10">
    <tr>
      <td width="133">First Name:</td>
      <td width="206"><input type="text" name="txt_name1" id="txt_name1" /></td>
    </tr>
    <tr>
      <td>Last Name:</td>
      <td><input type="text" name="txt_name2" id="txt_name2" /></td>
    </tr>
    <tr>
      <td>Gender:</td>
      <td><input type="radio" name="radio" id="rad_m" value="male" />
        Male 
         <input type="radio" name="radio" id="rad_f" value="female" />
        Female</td>
    </tr>
    <tr>
      <td>Status:</td>
      <td><input type="radio" name="status" id="rad_single" value="single" />
        Single
        <input type="radio" name="status" id="rad_married" value="married" />
        Married</td>
    </tr>
    <tr>
      <td>Salary:</td>
      <td><input type="text" name="txt_salary" id="txt_salary" /></td>
    </tr>
    <tr>
      <td height="49" colspan="2"><input type="submit" name="btn_calculate" id="btn_calculate" value="Calculate" /></td>
    </tr>
  </table>
  <br>
  <table width="430" border="1" cellpadding="10">
    <tr>
      <td width="161">Name:</td>
      <td width="217"><?php echo $name;  ?></td>
    </tr>
    <tr>
      <td>Gender:</td>
      <td><?php echo $gender;  ?></td>
    </tr>
    <tr>
      <td>Status:</td>
      <td><?php echo $status;  ?></td>
    </tr>
    <tr>
      <td>TA:</td>
      <td><?php echo $ta;  ?></td>
    </tr>
    <tr>
      <td>DA:</td>
      <td><?php echo $da;  ?></td>
    </tr>
    <tr>
      <td>HRA:</td>
      <td><?php echo $hra;  ?></td>
    </tr>
    <tr>
      <td>LIC:</td>
      <td><?php echo $lic;  ?></td>
    </tr>
    <tr>
      <td>PF:</td>
      <td><?php echo $pf;  ?></td>
    </tr>
    <tr>
      <td>Net:</td>
      <td><?php echo $net;  ?></td>
    </tr>
  </table> 
</form>
</body>
</html>