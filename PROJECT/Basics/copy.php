
<?php
session_start();
include("../Assets/Connection/Connection.php");
if(isset($_POST["btn_submit"]))
{
  
  $productname=$_POST["txt_name"];
  $productprice=$_POST["txt_price"];
  $productimg=$_FILES["browse"]["name"];
  $path=$_FILES["browse"]["tmp_name"];
  move_uploaded_file($path,"../ASSETS/Files/ProductImage/".$productimg);
  $productdesc=$_POST["txt_desc"];
  $brand=$_POST["slct_brand"];
  $color=$_POST["txt_color"];
  $subcat=$_POST["slct_scat"];
  $instQry="insert into tbl_product(product_name,product_price,product_image,product_description,brand_id,product_color,subcat_id,shop_id)values
  ('".$productname."','".$productprice."','".$productimg."','".$productdesc."','".$brand."','".$color."','".$subcat."','".$_SESSION["shop_id"]."')";
if($Conn->query($instQry))
{
  ?>
    <script>
  alert("Data Inserted");
  window.location("ProductDetails.php");
  </script>
    <?php
}
else
{
  ?>
    <script>
  alert("Data Inertion Failed");
  window.location("ProductDetails.php");
    </script>
    <?php
  }
}
if(isset($_GET["delID"]))
{
  $delQry="delete from tbl_product where product_id='".$_GET["delID"]."'";
  if($Conn->query($delQry))
  {
  ?>
  <script>
  alert("Record Deleted");
  window.location="ProductDetails.php";
  </script>
  <?php
  }
  else
  {
    ?>
    <script>
    alert("Record Deletion Failed");
    window.location="ProductDetails.php";
    </script>
    <?php
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
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="637" border="1">
  
    <tr>
      <td>Category</td>
      <td><label for="slct_cat"></label>
        <select name="slct_cat" id="slct_cat" onChange="getsubcat(this.value)">
         <option value="">-----select-----</option>
         <?php
    $sql="select * from tbl_category";
    $rows=$Conn->query($sql);
    while($result=$rows->fetch_assoc())
    {
      ?>
            <option value="<?php echo $result["category_id"]?>"><?php echo $result["category_name"]?></option>
            <?php
    }
    ?>
      </select>
      <label for="txt_sid"></label></td>
    </tr>
    <tr>
      <td>SubCategory</td>
      <td><label for="slct_scat"></label>
        <select name="slct_scat" id="slct_scat">
         <option value="">-----select-----</option>
         <?php
    $sql="select * from tbl_subcat";
    $rows=$Conn->query($sql);
    while($result=$rows->fetch_assoc())
    {
      ?>
            <option value="<?php echo $result["subcat_id"]?>"><?php echo $result["sub_name"]?></option>
            <?php
    }
    ?>
      </select>      
        <label for="txt_cid"></label></td>
      
    </tr>
    <tr>
      <td>Brand Name</td>
      <td><label for="slct_brand"></label>
        <select name="slct_brand" id="slct_brand">
         <option value="">-----select-----</option>
         <?php
    $sql="select * from tbl_brand";
    $rows=$Conn->query($sql);
    while($result=$rows->fetch_assoc())
    {
      ?>
            <option value="<?php echo $result["brand_id"]?>"><?php echo $result["brand_name"]?></option>
            <?php
    }
    ?>
      </select>        <label for="txt_brand"></label>
       <option value=""></option></td>
    </tr>
    <tr>
      <td>Product Color</td>
      <td><label for="txt_color"></label>
      <input type="text" name="txt_color" id="txt_color" /></td>
    </tr>
    <tr>
      <td width="194">Product Name</td>
      <td width="431"><label for="txt_name"></label>
      <input type="text" name="txt_name" id="txt_name" /></td>
    </tr>
    <tr>
      <td>Price</td>
      <td><label for="txt_price"></label>
      <input type="text" name="txt_price" id="txt_price" /></td>
    </tr>
   
    <tr>
      <td>Details</td>
      <td><label for="txt_desc"></label>
        <label for="browse"></label>


<textarea name="txt_desc" id="txt_desc" cols="23" rows="3"></textarea></td>
    </tr>
    
   <tr>
      <td><p>Image</p></td>
      <td><label for="browse"></label>
      <input type="file" name="browse" id="browse" /></td>
    </tr>

    <tr>
      <td colspan="2"><input type="submit" name="btn_submit" id="btn_submit" value="Save" />
      <input type="submit" name="cancel" id="btn_cancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
</body>
<script src="../Assets/JQ/jQuery.js"></script>
<script>
function getsubcat(did)
{
  $.ajax({
    url:"../Assets/AjaxPages/ajaxsubcat.php?did="+did,
    success: function(html){
      $("#slct_scat").html(html);
    }
  });
}

</script>
</body>
</html>
<table border="1" align="center">
<tr>
<td>SI.NO.</td>
<td>Category Name</td>
<td>Subcategory Name</td>
<td>Brand Name</td>
<td>Product Color</td> 
<td>Product Name</td>
<td>Price</td>
<td>Details</td>
<td>Image</td>
<td>Action</td>
<td>Stock</td>
</tr>
<?php
$selQry="select * from tbl_product p inner join tbl_subcat s on s.subcat_id=p.subcat_id inner join tbl_brand b on b.brand_id=p.brand_id inner join tbl_category t on t.category_id=s.category_id where p.shop_id='".$_SESSION["shop_id"]."'";
$row=$Conn->query($selQry);
$i=0;
while($data=$row->fetch_assoc())
{
  $i++;
  ?>
    <br />
    <br />
    <br />
  <tr>
    <td><?php echo$i;?></td>
    <td><?php echo $data["category_name"];?></td>
    <td><?php echo $data["sub_name"];?></td>
    <td><?php echo $data["brand_name"];?></td>
    <td><?php echo $data["product_color"];?></td>
    <td><?php echo $data["product_name"];?></td>
    <td><?php echo $data["product_price"];?></td>
    <td><?php echo $data["product_description"];?></td>
    <td><img src="../Assets/Files/ProductImage/<?php echo $data["product_image"];?>" width="120" height="120" /></td>
    <td><a href="ProductDetails.php?delID=<?php echo $data["product_id"];?>">Delete</a></td>
    <td><a href="Stock.php">Stock</a></td>
    
    </tr>
    <?php
}
?> 
</table>