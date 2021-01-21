<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";

	use Edu\board\Controller\Student;
	$stu = new Student;

	$data = $stu-> allStudents();
	$i = 1;
	foreach ($data as $stu) :

 ?>

 	<tr>
        <td><?php echo $i; $i++; ?></td>
        <td><?php echo $stu['name']; ?></td>
        <td><?php echo $stu['roll']; ?></td>
        <td><?php echo $stu['reg']; ?></td>
        <td><?php echo $stu['exam']; ?></td>
        <td><img style= "width: 50px;height: 50px;"src="images/a0.png" alt=""></td>
        <td>Active</td>
        <td>
            <a class= "btn btn-primary btn-sm" href="#">Edit</a>
            <a class= "btn btn-warning btn-sm" href="#">Update</a>
            <a class= "btn btn-danger btn-sm" href="#">Delete</a>
        </td>
    </tr>


 <?php endforeach; ?>