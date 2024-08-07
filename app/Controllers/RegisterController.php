<?php
namespace App\Controllers;
use App\Models\User;


class RegisterController{
	public function index(){
		view('register');
	}

	public function register(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$user = new User;
			$user->name = $_POST['name'];
			$user->email = $_POST['email'];
      $user->ip = $_SERVER['REMOTE_ADDR'];
      $user->agent = $_SERVER['HTTP_USER_AGENT'];

			if($user->register()){
				echo 'user registered';
			}else{
				echo 'Unable to register user';
			}
		}
	}
}
