<?php

session_start();

if(!isset($_SESSION['admin'])){

    echo "<script>

            window.location='login.php';

          </script>";

    exit();

}

?>

<html>

<head>

    <meta charset="UTF-8">

    <title>MyAdmin | Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/admin.css">

</head>

<body>

<div class="container-fluid">

<div class="row">

<div class="col-lg-2 sidebar text-white p-4">

    <div class="text-center">

        <h2 class="fw-bold">MyAdmin</h2>

        <small>Administrator Panel</small>

    </div>

    <hr>

    <a href="dashboard.php" class="menu active">

        <i class="bi bi-speedometer2"></i>

        Dashboard

    </a>

    <a href="manage_products.php" class="menu">

        <i class="bi bi-box-seam"></i>

        Manage Products

    </a>

    <a href="admin_users.php" class="menu">

        <i class="bi bi-people"></i>

        Admin Users

    </a>

    <a href="inventory_reports.php" class="menu">

        <i class="bi bi-bar-chart"></i>

        Inventory Report

    </a>

    <a href="audit_logs.php" class="menu">

        <i class="bi bi-clock-history"></i>

        Audit Logs

    </a>

    <a href="logout.php" class="logout">

        <i class="bi bi-box-arrow-right"></i>

        Logout

    </a>

</div>

<div class="col-lg-10 p-4">

<div class="topbar">

    <div>

        <h2 class="text-primary fw-bold">

            Dashboard

        </h2>

        <small>

            Welcome back,

            <strong>

                <?php echo $_SESSION['fullname']; ?>

            </strong>

        </small>

    </div>

</div>

<div class="row mt-4 g-4">

<div class="col-lg-3">

<div class="dashboard-card">

<i class="bi bi-box-seam card-icon"></i>

<h6>Products</h6>

<h1>0</h1>

</div>

</div>

<div class="col-lg-3">

<div class="dashboard-card">

<i class="bi bi-people card-icon"></i>

<h6>Admin Users</h6>

<h1>1</h1>

</div>

</div>

<div class="col-lg-3">

<div class="dashboard-card">

<i class="bi bi-tags card-icon"></i>

<h6>Categories</h6>

<h1>0</h1>

</div>

</div>

<div class="col-lg-3">

<div class="dashboard-card">

<i class="bi bi-exclamation-triangle card-icon"></i>

<h6>Low Stock</h6>

<h1>0</h1>

</div>

</div>

</div>

<div class="card shadow mt-4">

<div class="card-header fw-bold">

Recent Activities

</div>

<div class="card-body">

<p>

✔ Welcome to MyAdmin.

</p>

<p>

✔ Login Successful.

</p>

<p>

Inventory activities will appear here.

</p>

</div>

</div>

<div class="text-center mt-5 text-secondary">

administrator

</div>

</div>

</div>

</div>

</body>

</html>