<?php
 $large=" ";
if(isset($_POST["Largest"]))
{
	$num1=$_POST["num1"];
	$num2=$_POST["num2"];
	$num3=$_POST["num3"];
	$big=$num1;
	if($num2>$big)$big=$num2;
	if($num3>$big)$big=$num3;
	$result=$big;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Largest</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="272" border="1">
    <tr>
      <td width="92" height="40">Number 1</td>
      <td width="168"><label for="num1"></label>
      <input type="text" name="num1" id="num1" /></td>
    </tr>
    <tr>
      <td height="40">Number 2</td>
      <td><label for="num2"></label>
      <input type="text" name="num2" id="num2" /></td>
    </tr>
    <tr>
      <td height="39">Number 3</td>
      <td><label for="num3"></label>
      <input type="text" name="num3" id="num3" /></td>
    </tr>
    <tr>
      <td height="36" colspan="2"><input type="submit" name="Largest" id="submit" value="Largest" /></td>
    </tr>
    <tr>
      <td height="33">Largest</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>