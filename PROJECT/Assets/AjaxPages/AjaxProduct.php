<?php
	include("../Connection/Connection.php");
?>

<option value="">---SELECT---</option>

<?php
		$sel="select * from tbl_product where subcat_id='".$_GET["pid"]."'";
		$row=$conn->query($sel);
		while($data=$row->fetch_assoc())
		{
			?>
            <option value="<?php echo $data["prod_id"];?>"><?php echo $data["prod_name"];?></option>
            <?php
			
		}
?>
