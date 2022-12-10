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
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Profile Details</h6>
                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                        <?php
                                                echo "<tr><th scope='col'>Staff No: </th> <td>U00$user_id</td></tr>";
                                                echo "<tr><th scope='col'>First Name: </th> <td>$first_name</td></tr>";
                                                echo "<tr><th scope='col'>Last Name: </th> <td>$last_name</td></tr>";
                                                echo "<tr><th scope='col'>Email: </th> <td>$email</td></tr></tr>";
                                        ?>
                                        </thead>
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