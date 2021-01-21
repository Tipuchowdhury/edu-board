<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";

	use Edu\board\Controller\Student;
	$stu = new Student;

	$stu -> CreateStudent($_POST);


	
