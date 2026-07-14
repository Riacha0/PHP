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

    <link rel="stylesheet" href="../css/admin.css">

</head>

<body>

<div class="container-fluid">

    <div class="row">

        <div class="col-md-2 bg-dark text-white min-vh-100 p-4">

            <h3 class="text-center mb-4">

                MyAdmin

            </h3>

            <hr>

            <a href="dashboard.php" class="text-white text-decoration-none d-block mb-3">

                Dashboard

            </a>

            <a href="manage_products.php" class="text-white text-decoration-none d-block mb-3">

                Manage Products

            </a>

            <a href="admin_users.php" class="text-white text-decoration-none d-block mb-3">

                Admin Users

            </a>

            <a href="inventory_reports.php" class="text-white text-decoration-none d-block mb-3">

                Inventory Report

            </a>

            <a href="audit_logs.php" class="text-white text-decoration-none d-block mb-3">

                Audit Logs

            </a>

            <a href="logout.php" class="text-danger text-decoration-none d-block mt-5">

                Logout

            </a>

        </div>

        <div class="col-md-10 p-4">

            <h2>

                Dashboard

            </h2>

            <p>

                Welcome,

                <strong>

                    <?php echo $_SESSION['fullname']; ?>

                </strong>

            </p>

            <div class="row mt-4">

                <div class="col-md-3">

                    <div class="card shadow">

                        <div class="card-body text-center">

                            <h5>Products</h5>

                            <h1>0</h1>

                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card shadow">

                        <div class="card-body text-center">

                            <h5>Admin Users</h5>

                            <h1>1</h1>

                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card shadow">

                        <div class="card-body text-center">

                            <h5>Categories</h5>

                            <h1>0</h1>

                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card shadow">

                        <div class="card-body text-center">

                            <h5>Low Stock</h5>

                            <h1>0</h1>

                        </div>

                    </div>

                </div>

            </div>

            <div class="card shadow mt-4">

                <div class="card-header">

                    Recent Activities

                </div>

                <div class="card-body">

                    Welcome to MyAdmin.

                </div>

            </div>

        </div>

    </div>

</div>

</body>

</html>