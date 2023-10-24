<?php
if(!isset($_SESSION["login"])){
  header("Location: ./pages/login.php");
}
