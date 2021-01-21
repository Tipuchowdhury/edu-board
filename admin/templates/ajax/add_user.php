<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";

	use Edu\board\Controller\Users;

	$user = new Users;
	$mess = $user -> CreateUser($_POST);
	echo $mess;

 ?>