<?php
define("APP_ROOT", __dir__);

require_once APP_ROOT ."/vendor/autoload.php";

spl_autoload_register(function($class){
  $classFile = str_replace("\\", DIRECTORY_SEPARATOR, $class.'.php');
  $classPath = APP_ROOT.'/app/'.$classFile;
  
  if(file_exists($classPath)){
    require_once($classPath);
  }
});

session_start();
use App\Services\Router\RouteService;
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\DNSCheckValidation;

$route = new RouteService();
require_once APP_ROOT ."/routes/route.php";
$route->handle();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
//dd($_SERVER);
