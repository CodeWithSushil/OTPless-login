<?php
session_start();
if(!isset($_SESSION['login'])){
 header("Location: ./login.php");
 exit();
}
include_once("header.php");
?>
<h2 class="text-success"><?php echo $_SESSION['login']; ?></h2>
<a class="btn btn-outline-danger btn-sm" href="./logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>
<?php
include_once("footer.php");
?>