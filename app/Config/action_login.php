<?php
session_start();
require_once "./config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $user_ip = $_SERVER["REMOTE_ADDR"];
    $user_agent = $_SERVER["HTTP_USER_AGENT"];
    
    $qy = "SELECT * FROM users WHERE user_email='$email'";
    $req = mysqli_query($con, $qy);
    
    if(mysqli_num_rows($req) > 0){

      while($row = mysqli_fetch_assoc($req)){
        $u_email = $row['user_email'];
        $ip = $row['user_ip'];
        $agent = $row['user_agent'];
        $name = $row['user_name'];
      }
      
      if($email !== $u_email) {
        echo "<h2> User not exist. </h2>";
      } elseif($user_ip !== $ip){
       echo "<h2>Invaild user. </h2>";
     } elseif($user_agent !== $agent){
       echo "<h2>Invaild User Access.</h2>";
     } else {
       $sql = "UPDATE users SET status='1' WHERE user_email='$email';";
       $res = mysqli_query($con, $sql);
       if($res){
         $_SESSION['login']=$name;
         header("Location: ../pages/home.php");
       }
     }
    } else{
      echo "<p>User not exist</p>";
    }
  }
}
