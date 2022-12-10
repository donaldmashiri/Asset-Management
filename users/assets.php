<?php include_once ('../includes/header.php');

$active = $_GET['active'];
$dispose = $_GET['dispose'];
$delete = $_GET['delete'];

if (isset($_GET['active'])) {

    $active = $_GET['active'];
    $status = "active";

    $query = "UPDATE assets SET ";
    $query .= "status  = '{$status}' ";
    $query .= "WHERE asset_id = $active ";

    $update_query = mysqli_query($conn, $query);
    if (!$update_query) {
        die("Query failed" . mysqli_error($conn));
    }
}

if (isset($_GET['dispose'])) {

    $dispose = $_GET['dispose'];
    $status = "disposed";

    $query = "UPDATE assets SET ";
    $query .= "status  = '{$status}' ";
    $query .= "WHERE asset_id = $dispose ";

    $update_query = mysqli_query($conn, $query);
    if (!$update_query) {
        die("Query failed" . mysqli_error($conn));
    }
}


if (isset($_GET['delete'])) {

    $delete = $_GET['delete'];

    $query = "DELETE FROM assets WHERE asset_id = $delete ";

    $delete_query = mysqli_query($conn, $query);
    if (!$delete_query) {
        die("Query failed" . mysqli_error($conn));
    }
}




?>

<?php include_once ('topbar.php'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-112 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header bg-dark py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">All Assets</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">AST#:</th>
                                <th scope="col">Type Of Asset</th>
                                <th scope="col">Asset Names</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price ($)</th>
                                <th scope="col">Description</th>
                                <th scope="col">Date Added</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM assets";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $asset_id = $row["asset_id"];
                                    $asset_name = $row["asset_name"];
                                    $asset_type = $row["asset_type"];
                                    $description = $row["description"];
                                    $price = $row["price"];
                                    $quantity = $row["quantity"];
                                    $status = $row["status"];
                                    $date_added = $row["date_added"];
                                    $status = $row["status"];


                            ?>
                            <tr>
                                <th scope="row">AST<?php echo $asset_id ?></th>
                                <td><?php echo $asset_type ?></td>
                                <td><?php echo $asset_name ?></td>
                                <td><?php echo $quantity ?></td>
                                <td class="font-weight-bold text-success">$<?php echo $price ?>.00</td>
                                <td><?php echo $description ?></td>
                                <td><?php echo $date_added ?></td>
                                <td class="font-weight-bold">
                                    <?php
                                    if($status === 'active'){
                                        echo "<p class='text-success'>$status</p>";
                                    }elseif ($status === 'disposed'){
                                        echo "<p class='text-danger'>$status</p>";
                                    }else{
                                        echo "<p class='text-primary'>$status</p>";
                                    }
                                    ?>
                                <td>
                                    <a href="assets.php?active=<?php echo $asset_id ?>" class="btn btn-primary btn-sm"> Active </a>
                                    <a href="assets.php?dispose=<?php echo $asset_id ?>" class="btn btn-warning btn-sm">Dispose</a>
                                    <a href="edit.php?edit=<?php echo $asset_id ?>" class="btn btn-info btn-sm">Edit</a>
                                    <a href="assets.php?delete=<?php echo $asset_id ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                                    <?php
                                }
                            }else{
                                echo "<h1 class='alert alert-danger'>You Have no assets</h1>";
                            }
                                    ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php include_once ('../includes/footer.php'); ?>