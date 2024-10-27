<?php

include('classs/function.php');
$fun = new fun();

session_start();

if (isset($_GET['adminLogout'])) {
    if ($_GET['adminLogout'] == 'logout') {
        $fun->adminLogout();
    }
}

$products = $fun->displayProduct();

$user = $fun->displayUser();

$adminUser = $fun->displayAdminUser();

if(isset($_GET['adminUserStatus'])) {
    $id = $_GET['id'];
    if($_GET['adminUserStatus'] == 'delete') {
        $fun -> deleteAdmin($id);

        header("Location: {$_SERVER['PHP_SELF']}");
        exit();
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="shortcut icon" type="image/png" href="img/logos/favicon.png" />
    <link rel="stylesheet" href="css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="dashboard.php" class="text-nowrap logo-img text-decoration-none text-black fw-semibold fs-5 text-center">
                        <img src="img/logos/dark-logo.svg" alt="" class="me-2" />
                        Lanka Pc Builder
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="dashboard.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Products</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="manageProducts.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">Manage</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="addProduct.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-grid-add"></i>
                                </span>
                                <span class="hide-menu">Add</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">User</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="manageUser.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">Manage</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="addUser.php" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-grid-add"></i>
                                </span>
                                <span class="hide-menu">Add</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="img/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href="?adminLogout=logout" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <!--  Row 1 -->
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h3><b style="font-style: italic;">Users List</b></h3>
                            <br>
                            <h5><b style="font-style: italic;">Admin Users</b></h5>
                            <div class="row">
                                <?php
                                while ($adminUserR = mysqli_fetch_assoc($adminUser)) {
                                ?>
                                    <div class="col-md-4">
                                        <!-- <h5 class="card-title fw-semibold mb-4">Product</h5> -->
                                        <div class="card shadow-lg">

                                            <img style="width: 60%; padding: 10px; border-radius: 50%;display: block;margin: auto;" src="img\profile\user-1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body" style="height: 180px;">
                                                <h5 class="card-title"><?php echo $adminUserR['admin_email'] ?></h5>
                                                <a href="#" class="btn btn-primary">Edit</a>
                                                <a href="?adminUserStatus=delete&&id=<?php echo $adminUserR['admin_id'] ?>" class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <h5><b style="font-style: italic;">Normal Users</b></h5>
                            <div class="row">
                                <?php
                                while ($usr = mysqli_fetch_assoc($user)) {
                                ?>
                                    <div class="col-md-4">
                                        <!-- <h5 class="card-title fw-semibold mb-4">Product</h5> -->
                                        <div class="card shadow-lg">

                                            <img style="width: 60%; padding: 10px; border-radius: 50%;display: block;margin: auto;" src="img\profile\user-1.jpg" class="card-img-top" alt="...">
                                            <div class="card-body" style="height: 180px;">
                                                <h5 class="card-title"><?php echo $usr['user_email'] ?></h5>
                                                <p>User Name :
                                                    <?php
                                                    echo $usr['user_name'];
                                                    ?>
                                                </p>
                                                <a href="#" class="btn btn-primary">Edit</a>
                                                <a href="?userStatus=delete&&id=<?php echo $usr['user_id'] ?>" class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <script src="libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/app.min.js"></script>
    <script src="libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="libs/simplebar/dist/simplebar.js"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>