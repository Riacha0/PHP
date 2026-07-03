<?php

session_start();

session_destroy();

header("Location: SA3A_Login.php");

exit();

?>