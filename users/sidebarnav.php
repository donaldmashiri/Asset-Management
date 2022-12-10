<li class="nav-item ">
    <a class="nav-link collapsed " href="index.php"><i class="fas fa-fw fa-user"></i>Profile   </a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="add_asset.php"><i class="fas fa-fw fa-fan"></i>Add asset </a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="assets.php"><i class="fas fa-fw fa-ankh"></i>All Assets </a>
</li>

<li class="nav-item ">
    <a class="nav-link collapsed " href="search_asset.php"><i class="fas fa-fw fa-search"></i>Search an Asset </a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="active.php"><i class="fas fa-fw fa-cat"></i>Active Assets</a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="disposed.php"><i class="fas fa-fw fa-forward"></i>Disposed Assets</a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="reports.php"><i class="fas fa-fw fa-retweet"></i> Reports </a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="index.php?logout='logout'"><i class="fas fa-fw fa-reply"></i>Logout </a>
</li>

<?php
if (isset($_GET['logout'])) {
    unset($_SESSION['user_id']);
    session_destroy();
    header("Refresh:1; ../login.php");
//    echo $_SESSION['user_id'];
}

?>