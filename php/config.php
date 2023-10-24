<?php
require_once "../vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['HOST'];
$user = $_ENV['USER'];
$password = $_ENV['PASSWORD'];
$db_name = $_ENV['DB_NAME'];

$con = mysqli_connect($host, $user, $password, $db_name);

if (!$con) {
  die("Connection failde: ". mysqli_connect_error($con));
}