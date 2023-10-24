<?php
require_once "./config.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST["submit"])) {
     $name = $_POST["name"];
     $email = $_POST["email"];
     $user_ip = $_SERVER["REMOTE_ADDR"];
     $user_agent = $_SERVER["HTTP_USER_AGENT"];
     
     $qy = "SELECT * FROM users WHERE user_email='$email'";
     $req = mysqli_query($con, $qy);
     $result = mysqli_num_rows($req);
     
     if($result > 0){
       header("Location: ../pages/signup.php");
     } else {
       $sql = "INSERT INTO users (user_name, user_email, user_ip, user_agent) VALUES ('$name', '$email', '$user_ip', '$user_agent')";
       $res = mysqli_query($con, $sql);
       
       if($res){
         header("Location: ../pages/login.php");
       }
     }
  }
}