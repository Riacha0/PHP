<?php

session_start();

include("SA3B_DBConnection.php");

if(isset($_POST['reset'])){

    $username = $_SESSION['username'];

    $currentpassword = $_POST['currentpassword'];
    $newpassword = $_POST['newpassword'];
    $renewpassword = $_POST['renewpassword'];

    $sql = "SELECT * FROM MyUsers WHERE username='$username'";

    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($result);

    if($currentpassword != $row['password']){

        echo "<script>

                alert('Current password is not the same with the old password.');

                window.location='SA3B_Home.php';

              </script>";

    }
    else if($newpassword != $renewpassword){

        echo "<script>

                alert('New password and Re-Enter new password should be the same.');

                window.location='SA3B_Home.php';

              </script>";

    }
    else{

        $update = "UPDATE MyUsers
                   SET password='$newpassword'
                   WHERE username='$username'";

        if(mysqli_query($conn,$update)){

            echo "<script>

                    alert('Password Successfully Updated!');

                    window.location='SA3B_Home.php';

                  </script>";

        }
        else{

            echo "<script>

                    alert('Password Update Failed.');

                    window.location='SA3B_Home.php';

                  </script>";

        }

    }

}

?>