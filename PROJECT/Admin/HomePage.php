<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Deepz Cake House Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/Template/Admin/assets/css/bootstrap.css">

    <link rel="stylesheet" href="../Assets/Template/Admin/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="../Assets/Template/Admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../Assets/Template/Admin/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../Assets/Template/Admin/assets/css/app.css">
    <link rel="shortcut icon" href="../Assets/Template/Admin/assets/images/favicon.svg" type="image/x-icon">
    <?php

include("../Assets/Connection/Connection.php");
session_start();
?>
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="img">
                       <img src="../Assets/Template/Admin/assets/images/logo/logo.jpg" style="height: 147px;width:200px;" alt="Logo" srcset="">
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="HomePage.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="UserBooking.php" class='sidebar-link'>
                                <i class="bi bi-basket-fill"></i>
                                <span>User Bookings</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-map"></i>
                                <span>Location</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="District.php">District</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="Place.php">Place</a>
                                </li>
                                
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Type</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="Category.php">Category</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="SubCategory.php">SubCategory</a>
                                </li>
                                
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Product</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="Product.php">New Product</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ProductList.php">Product List</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Offer</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="OfferDetails.php">Offer Details</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="OfferProduct.php">Offer Product </a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="User_List.php" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>User List</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="Pie.php" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Sales Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="Report.php" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Productwise Report</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="Report 1.php" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Categorywise Report</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="ViewUserComplaints.php" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>View Complaint</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="AdminRegistration.php" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Admin Registration</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="../Guest/Login.php" class='sidebar-link'>
                                <i class="bi bi-arrow-right"></i>
                                <span>Logout</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Profile Statistics</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <?php
                                                $sel="select COUNT(cart_qty) as qty from tbl_cart";
                                                
                                                $row=$conn->query($sel);
                                                while($data=$row->fetch_assoc())
                                                {
                                                
                                                ?>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Booking</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $data["qty"]  ?></h6>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <?php
                                                $sel1="select COUNT(booking_id) as book from tbl_booking where booking_date=curdate()";
                                                
                                                $row1=$conn->query($sel1);
                                                while($data1=$row1->fetch_assoc())
                                                {
                                                
                                                ?>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Todays Booking</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $data1["book"]  ?></h6>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <?php
                                                $sel2="SELECT COUNT(offer_id) as offer FROM tbl_offer where (curdate() between offer_frm_date and offer_to_date)";
                                                
                                                $row2=$conn->query($sel2);
                                                while($data2=$row2->fetch_assoc())
                                                {
                                                
                                                ?>
                                             
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Active Offer</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $data2["offer"]  ?></h6>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <?php
                                                $sel3=" select COUNT(prod_id) as prod from tbl_product";
                                                
                                                $row3=$conn->query($sel3);
                                                while($data3=$row3->fetch_assoc())
                                                {
                                                
                                                ?>
                                             
                                           
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Total Product</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $data3["prod"]  ?></h6>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row"  style="padding-left:20px;">
                            
                            <div class="col-12 col-xl-8">
                                <div class="card" >
                                    <div class="card-header" >
                                        <h4>Feedback</h4>
                                    </div>
                                    <div class="card-body" >
                                        <div class="table-responsive" >
                                            <table class="table table-hover table-lg" >
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Comment</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                $sel="select * from tbl_feedback f inner join tbl_user u on u.user_id=f.user_id";
                                                $row=$conn->query($sel);
                                                while($data=$row->fetch_assoc())
                                                {
                                                ?>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="../Assets/Files/User/<?php echo $data["user_photo"]?>">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0"><?php echo $data["user_name"]?></p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0"><?php echo $data["feedback_details"]?></p>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                   
                                    <div class="ms-3 name">
                                        <h5 class="font-bold"><?php echo $_SESSION["lgname"]?></h5>
                                        <h6 class="text-muted mb-0">Admin</h6>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <h4>New Complaints</h4>
                            </div>
                           
                            <div class="card-content pb-4">
                            <?php
                                                $sel="select * from tbl_complaint c inner join tbl_user u on c.user_id=u.user_id where comp_status='0'";
                                                //"select * from tbl_complaint f inner join tbl_user u on u.user_id=f.user_id";
                                                $row=$conn->query($sel);
                                                while($data=$row->fetch_assoc())
                                                {
                                                ?>
                                <div class="recent-message d-flex px-4 py-3">
                               
                                    <div class="avatar avatar-lg">
                                        <img src="../Assets/Files/User/<?php echo $data["user_photo"]?>">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1"><?php echo $data["user_name"]?></h5>
                                        <h6 class="text-muted mb-0"><?php echo $data["comp_sub"]?></h6>
                                    </div>
                                  
                                </div>
                                <?php
                                                }
                                    ?>
                            </div>
                        </div>
                        
                        
                    </div>
                </section>
            </div>
<br><br><br><br><br>
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by Jithin</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="../Assets/Template/Admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../Assets/Template/Admin/assets/js/bootstrap.bundle.min.js"></script>

    <script src="../Assets/Template/Admin/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="../Assets/Template/Admin/assets/js/pages/dashboard.js"></script>

    <script src="../Assets/Template/Admin/assets/js/main.js"></script>
</body>

</html>