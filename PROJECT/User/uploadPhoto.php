<?php
session_start();
include("../Assets/Connection/Connection.php");
?>
<?php 
    
        $id = $_POST["id"];
        $photo=$_FILES["file"]["name"];
		$path=$_FILES["file"]["tmp_name"];
		move_uploaded_file($path,"../Asset/Files/Product/".$photo);
	    $upQry = "update tbl_cart set prod_photo = '" .$photo. "'  where cart_id='" .$id. "'";
        $conn->query($upQry);
    
?>
