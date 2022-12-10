<?php include_once ('../includes/header.php'); ?>

<?php include_once ('topbar.php'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header bg-info py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Edit Asset</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">

                        <?php
                        $id = $_GET['edit'];

                        $sql = "SELECT * FROM assets WHERE asset_id = $id";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        $asset_id = $row["asset_id"];
                        $asset_name = $row["asset_name"];
                        $asset_type = $row["asset_type"];
                        $description = $row["description"];
                        $price = $row["price"];
                        $quantity = $row["quantity"];
                        $status = $row["status"];
                        $date_added = $row["date_added"];
                        $status = $row["status"];


                        if(isset($_POST['update'])){

                            $asset_name = $conn -> real_escape_string($_POST['asset_name']);
                            $asset_type = $conn -> real_escape_string($_POST['asset_type']);
                            $description = $conn -> real_escape_string($_POST['description']);
                            $quantity = $conn -> real_escape_string($_POST['quantity']);
                            $price = $conn -> real_escape_string($_POST['price']);
                            $description = $conn -> real_escape_string($_POST['description']);

                            $query = "UPDATE assets SET ";
                            $query .= "asset_name  = '{$asset_name}', ";
                            $query .= "asset_type  = '{$asset_type}', ";
                            $query .= "description  = '{$description}', ";
                            $query .= "quantity  = '{$quantity}', ";
                            $query .= "price  = {$price} ";
                            $query .= "WHERE asset_id = $asset_id ";

                            $update_query = mysqli_query($conn, $query);
                            if (!$update_query) {
                                die("Query failed" . mysqli_error($conn));
                            }
                            header("Location: assets.php");
                        }
                        ?>

                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Asset Name</label>
                                        <input type="text" name="asset_name" class="form-control" value="<?php echo $asset_name ?>" minlength="3" required>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="title">Type of Asset</label>
                                        <select class="form-control" name="asset_type" id="">
                                            <option value="<?php echo $asset_type ?>"><?php echo $asset_type ?>t</option>
                                            <option value="fixed assets">Fixed assets</option>
                                            <option value="tangible asset">Tangible asset</option>
                                            <option value="intangible assets">Intangible assets</option>
                                            <option value="operating assets">Operating assets</option>
                                            <option value="non-operating assets">Non-operating assets</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="title">Quantity</label>
                                        <input type="number" name="quantity" class="form-control" value="<?php echo $quantity ?>" min="1" required>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="title">Price</label>
                                        <input type="number" name="price" class="form-control" value="<?php echo $price ?>" min="1" required>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="title">Additional Description Or Information</label>
                                        <textarea class="form-control" name="description" id="" cols="15" rows="5"><?php echo $description ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="update" class="btn btn-info">Update</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php include_once ('../includes/footer.php'); ?>