<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";

	use Edu\board\Controller\Result;
	$res = new Result;


	$res -> AddResult($_POST);


	



 ?>