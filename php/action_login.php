<?php
if($_SERVER['REQUEST_METHOD'] === "POST"){

$user_ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];

if(isset($_POST['submit'])){
  $email = $_POST['email'];

}


echo "<pre>";
print_r($_SERVER);
print_r($_POST);
}
