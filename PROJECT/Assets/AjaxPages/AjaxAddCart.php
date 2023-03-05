<?php
include("../Connection/Connection.php");
session_start();
$selqry="select * from tbl_booking where booking_status=0 and user_id='".$_SESSION["lgid"]."'";
$result=$conn->query($selqry);
if($result->num_rows>0)
{
	
	if($row=$result->fetch_assoc())
	{
		$bid = $row["booking_id"];
		
		
		
		$selqry="select * from tbl_cart where cart_status=0 and booking_id='".$bid."'and prod_id='".$_GET["id"]."'";
		$result=$conn->query($selqry);
		if($result->num_rows>0)
		{
			 echo "Already Added to Cart";
			
		}
		else
		{
		
		 $insQry1="insert into tbl_cart(prod_id,booking_id)values('".$_GET["id"]."','".$bid."')";
         if($conn->query($insQry1))
          { 
             echo "Added to Cart";
                        }
                        else
                        {
	                       echo"Failed";
                        }
		}
		
	}
	
}
else
{
	

$insQry=" insert into tbl_booking(user_id)values('".$_SESSION["lgid"]."')";
			if($conn->query($insQry))
			{
				$selqry1="select MAX(booking_id) as id from tbl_booking";
                $result=$conn->query($selqry1);
				if($row=$result->fetch_assoc())
				{
					$bid=$row["id"];
					
					
					$selqry="select * from tbl_cart where cart_status=0 and  booking_id='".$bid."'and prod_id='".$_GET["id"]."'";
		$result=$conn->query($selqry);
		if($result->num_rows>0)
		{
			 echo "Already Added to Cart";
			
		}
		else
		{
					
					
	                   $insQry1="insert into tbl_cart(prod_id,booking_id)values('".$_GET["id"]."','".$bid."')";
                        if($conn->query($insQry1))
                        { 
                          echo "Added to Cart";
                        }
                        else
                        {
	                       echo"Failed";
                        }
					  
		}

                }
			}
}
?>