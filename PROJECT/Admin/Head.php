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

    <link rel="stylesheet" href="../Assets/Template/Admin/form.css">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
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
                        <li class="sidebar-item  ">
                            <a href="Report.php" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Productwise Report</span>
                            </a>
                            <li class="sidebar-item  ">
                            <a href="Report 1.php" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Categorywise Report</span>
                            </a>
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
            