<?php

if(empty($_SESSION['user_id'])){
    header("location: ../login.php");
}

$sql = "SELECT * FROM users WHERE user_id = '{$_SESSION['user_id']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $user_id = $row["user_id"];
    $first_name = $row["first_name"];
    $last_name = $row["last_name"];
    $user_type = $row["user_type"];
    $email = $row["email"];
    $address = $row["address"];
    $date_created = $row["date_created"];
}
?>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul style="background-color: darkgreen" class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon">
                <!--                    <i class="fas fa-laugh-wink"></i>-->
                <img src="../img/mimosa.jpg" class="rounded-circle" width="50" height="50" alt="">
            </div>
            <div class="sidebar-brand-text mx-3">Mimosa Mining Company</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Dashboard
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <?php include_once ('sidebarnav.php')?>

        <!-- Divider -->
        <hr class="sidebar-divider">
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav style="background-color: #1c7430" class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $first_name ?></span>
                            <img class="img-profile rounded-circle"
                                 src="../img/mimosa.jpg" width="50" height="50">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../index.php" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>

            </nav>
            <!-- End of Topbar -->
