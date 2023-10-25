<?php
session_start();
session_unset();
session_destroy();
require_once("../php/config.php");
mysqli_query($con, "UPDATE users SET status='0';");
header("Location: ./login.php");
exit();