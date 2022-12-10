<?php include_once ('../includes/header.php'); ?>

<?php include_once ('topbar.php'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header bg-dark py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Reports</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-header"><h4 class="font-weight-bolder text-primary">Total Assets</h4></div>
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                    $query = "SELECT count(*) FROM assets";
                                                    $result = mysqli_query($conn, $query);
                                                    $row = mysqli_fetch_array($result);
                                                    echo $total_savings = $row[0];
                                                    ?> Assets
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-header"><h4 class="font-weight-bolder text-success">Active</h4></div>
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Active : <?php
                                                    $query = "SELECT count(*) FROM assets WHERE status = 'active' ";
                                                    $result = mysqli_query($conn, $query);
                                                    $row = mysqli_fetch_array($result);
                                                    echo $total_savings = $row[0];
                                                    ?> Assets
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-header"><h4 class="font-weight-bolder text-danger">Disposed</h4></div>
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Disposed : <?php
                                                    $query = "SELECT count(*) FROM assets WHERE status = 'disposed' ";
                                                    $result = mysqli_query($conn, $query);
                                                    $row = mysqli_fetch_array($result);
                                                    echo $total_savings = $row[0];
                                                    ?> Assets
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php include_once ('../includes/footer.php'); ?>