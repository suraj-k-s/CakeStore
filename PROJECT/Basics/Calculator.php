<?php

$res=0;
if(isset($_POST["btn_add"]))
{
	$num1=$_POST["txt_num1"];
	$num2=$_POST["txt_num2"];
	$res=$num1+$num2;
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
  <table border="1" cellpadding="10">
    <tr>
      <td>First Number</td>
      <td><input type="text" name="txt_num1" id="txt_num1" /></td>
    </tr>
    <tr>
      <td>Second Number</td>
      <td><input type="text" name="txt_num2" id="txt_num2" /></td>
    </tr>
    <tr>
      
      <td colspan="2"><input type="submit" name="btn_add" id="btn_add" value="+" />
      <input type="submit" name="btn_sub" id="btn_sub" value="-" /></td>
    </tr>
    <tr>
      <td>Result</td>
      <td><?php echo $res;?></td>
    </tr>
  </table>
</form>
</body>
</html>