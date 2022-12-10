<?php include_once ('../includes/header.php'); ?>

<?php include_once ('topbar.php'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->

        <div class="row">


            <!-- Area Chart -->
            <div class="col-xl-7 col-lg-9">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Search for Live Stock </h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Search by <small>(name or type)</small></label>
                                <input type="text" name="search" class="form-control" placeholder="Search by name or type">
                            </div>
                            <button name="submit" class="btn btn-primary float-right mb-5">Search <i class="fa fa-search"></i></button>
                        </form>

                        <hr>
                        <br>

                        <?php
                        if(isset($_POST['submit'])) {

                            $search = strtoupper($_POST['search']);

                            $query = "SELECT * FROM assets WHERE asset_type LIKE '%{$search}%' OR asset_name LIKE '%{$search}%'";

                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                            $count = mysqli_num_rows($result);

                            if ($count >= 1) {
                                $asset_id = $row["asset_id"];
                                $asset_name = $row["asset_name"];
                                $asset_type = $row["asset_type"];
                                $description = $row["description"];
                                $price = $row["price"];
                                $quantity = $row["quantity"];
                                $status = $row["status"];
                                $date_added = $row["date_added"];
                                $status = $row["status"];

                                echo "<ul class='list-group '>
                                  <li class='list-group-item bg-success text-white'>Asset is found</li> 
                                  <li class='list-group-item'>AST# :</span>  $asset_id </li> 
                                  <li class='list-group-item'>Type :</span>  $asset_type </li> 
                                  <li class='list-group-item'>Name :</span>  $asset_name </li>
                                  <li class='list-group-item'>Quantity :</span>  $quantity </li>
                                  <li class='list-group-item'>Price :</span>  $price </li>
                                  <li class='list-group-item'>Description :</span>  $description </li>
                                  <li class='list-group-item'>Date Added :</span>  $date_added </li>
                                  <li class='list-group-item'>Status :</span>  $status </li>
                                  <a href='edit.php?edit=$asset_id' class='btn btn-info'>Edit Asset</a> 
                                  </ul>";


                            } else {
                                echo "<ul class='list-group '>
                  <li class='list-group-item bg-danger text-white'>Assets is  not found</li> 
               </ul>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php include_once ('../includes/footer.php'); ?>