<?php
$Price="";
include("../Connection/Connection.php");

    if (isset($_GET["action"])) {

        $sqlQry = "SELECT * from tbl_product p inner join tbl_subcat sc on sc.subcat_id=p.subcat_id inner join tbl_category c on c.cat_id=sc.cat_id  where true ";
        $row = "SELECT count(*) as count from tbl_product p inner join tbl_subcat sc on sc.subcat_id=p.subcat_id inner join tbl_category c on c.cat_id=sc.cat_id  where true ";
		
		if ($_GET["name"]!=null) {

            $name = $_GET["name"];

            $sqlQry = $sqlQry." AND p.prod_name lIKE '".$name."%'";
            $row = $row." AND p.prod_name lIKE '".$name."%'";
        }

        if ($_GET["category"]!=null) {

            $category = $_GET["category"];

            $sqlQry = $sqlQry." AND c.cat_id IN(".$category.")";
            $row = $row." AND c.cat_id IN(".$category.")";
        }
        if ($_GET["subcategory"]!=null) {

            $subcategory = $_GET["subcategory"];

            $sqlQry = $sqlQry." AND sc.subcat_id IN(".$subcategory.")";
            $row = $row." AND sc.subcat_id IN(".$subcategory.")";
        }

        $resultS = $conn->query($sqlQry);
        $resultR = $conn->query($row);
        
       
        $rowR = $resultR->fetch_assoc();

        if ($rowR["count"] > 0) {
            while ($rowS = $resultS->fetch_assoc()) {
				
?>

<div class="col-md-3 mb-2">
                            <div class="card-deck">
                                <div class="card border-secondary">
                                    <img src="../Assets/Files/Product/<?php echo $rowS["prod_img"]; ?>" class="card-img-top" height="250">
                                    <div class="card-img-secondary">
                                        <h6  class="text-light bg-info text-center rounded p-1"><?php echo $rowS["prod_name"]; ?></h6>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title text-danger" align="center">
                                        
                                            
                                            <?php
											$selO="select * from tbl_offer_product op inner join tbl_offer o on o.offer_id=op.offer_id  where prod_id='".$rowS["prod_id"]."' and curdate() between offer_frm_date and offer_to_date and curtime() between offer_frm_time and offer_to_time";
											$rowO=$conn->query($selO);
											if($dataO=$rowO->fetch_assoc())
											{
											$Price=$dataO["offer_prod_price"];
												?>
												<strike>Price : <?php echo $rowS["prod_price"]; ?>/-</strike><br />
                                                Offer Price : <?php echo $dataO["offer_prod_price"];?>/-
                                                <?php
											}
											else
											{
												?>
												Price : <?php echo $rowS["prod_price"]; ?>/-<br />
                                                <?php
											}
											?>
                                            
                                           
                                        </h4>
                                        <p align="center">
                                            <?php echo $rowS["cat_name"]; ?><br>
                                            <?php echo $rowS["subcat_name"]; ?><br>
                                        </p>
                                       
                                        <a href="javascript:void(0)" onclick="addCart('<?php echo $rowS["prod_id"]; ?>')" class="btn btn-success btn-block">Add to Cart</a>
                                        <a href="ProductDetailsViewMore.php?pid=<?php echo $rowS["prod_id"]; ?>" class="btn btn-warning btn-block">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

<?php
            }
        } else {
             echo "<h4 align='center'>Products Not Found!!!!</h4>";
        }
    }

?>