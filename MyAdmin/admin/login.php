<html>

<head>

    <meta charset="UTF-8">

    <title>MyAdmin | Administrator Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/admin.css">

</head>

<body>

<div class="container">

    <div class="row justify-content-center align-items-center vh-100">

        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-body p-5">

                    <div class="text-center mb-4">

                        <h2 class="fw-bold">MyAdmin</h2>

                        <p class="text-muted">

                            Administrator Login

                        </p>

                    </div>

                    <form action="" method="POST">

                        <div class="mb-3">

                            <label class="form-label">

                                Username

                            </label>

                            <input
                                type="text"
                                class="form-control"
                                name="username"
                                required>

                        </div>

                        <div class="mb-4">

                            <label class="form-label">

                                Password

                            </label>

                            <input
                                type="password"
                                class="form-control"
                                name="password"
                                required>

                        </div>

                        <button
                            class="btn btn-primary w-100"
                            name="login">

                            Login

                        </button>

                    </form>

                    <hr>

                    <p class="text-center text-muted">

                        Authorized Personnel Only

                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

</body>

</html>

<?php

session_start();

include("../includes/db_connection.php");
include("../includes/functions.php");



if(isset($_SESSION['admin'])){

    echo "<script>

            window.location='dashboard.php';

          </script>";

}

if(isset($_POST['login'])){

    $username=$_POST['username'];

    $password=$_POST['password'];

    $sql="SELECT * FROM admins
          WHERE username='$username'
          AND password='$password'";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1){

    $row=mysqli_fetch_assoc($result);

    $_SESSION['admin']=$row['admin_id'];
    $_SESSION['fullname']=$row['fullname'];
    $_SESSION['role']=$row['role'];

    addAuditLog($conn, $_SESSION['admin'], "Logged In");

    echo "<script>

            alert('Login Successful.');

            window.location='dashboard.php';

          </script>";

}

    else{

        echo "<script>

                alert('Invalid Username or Password.');

              </script>";

    }

}

?>