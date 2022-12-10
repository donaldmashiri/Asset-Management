<?php include ("includes/db.php")?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Mimosa Mining Companym</title>
    <link rel="icon" type="image/x-icon" href="img/mimosa.jpg">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="css/boot.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-success">
        <a class="navbar-brand" href="#">
            <img src="img/mimosa.jpg" width="60" height="60" class="rounded-circle" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <h4 class="text-white">Mimosa Mining Company</h4>

        </div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" target="_blank" href="index.php">Login</a>
            </li>
        </ul>
    </nav>
</header>

<main style="background-image: url('img/mimosa.jpg');" role="main">

    <div class="card card-body container marketing mt-5">
<div class="card">
    <div class="card-header text-center bg-success"><h3 class="font-weight-bold text-white">Assets Management System</h3></div>
      <div class="row">
        <div class="card-body">
        <p class="text">
            An asset management system is a process a company uses to manage all of its assets across the business. These assets can be tangible or intangible. They can include personnel, buildings, software and hardware, inventory, monetary assets, and anything vital to the business's day-to-day running.
          </p>
        </div>
      </div>
       <div class="card">
        <div class="card-body">
        <div class="row">

<div class="col-lg-3">

</div><!-- /.col-lg-4 -->
<div class="col-lg-6">
    <div class="">
        <div class="text-center">
            <h1 class="h4 card-header mb-4">Login</h1>
        </div>

        <?php
        if(isset($_POST['user_login'])){
            $email = $conn -> real_escape_string($_POST['email']);
            $password = $conn -> real_escape_string($_POST['password']);

            $query = "select * from users where email = '$email' and password = '$password'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);

            if ($count == 1) {
                $_SESSION['user_id'] = $row['user_id'];
                header('location: users/index.php');
            } else {
                echo "<p style='background-color: red' class='alert text-white alert-danger'>Incorrect Password</p>";
            }
        }
        ?>

        <form class="user" method="post">
            <div class="form-group">
                <input type="email" name="email" class="form-control form-control-user"
                       id="MsuEmail" aria-describedby="emailHelp"
                       placeholder="Enter Email Your Address..." required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control form-control-user"
                       id="MsuPassword" placeholder="Password" required>
            </div>
            <button type="submit" name="user_login" class="btn btn-success btn-user btn-block">
                Login
            </button>
        </form>
    </div>

</div>
<div class="col-lg-3">

</div>
</div><!-- /.row -->
        </div>
       </div>
       </div>

        <!-- FOOTER -->
        <footer class="container">
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2022</span>
                    </div>
                </div>
            </footer>
        </footer>
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!-- Bootstrap core JavaScript-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>
</html>
