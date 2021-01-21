<?php 

	
	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";

	use Edu\board\Controller\Student;
	$stu = new Student;

	$data = $stu -> StudentSearch($_POST['student_search']);

	echo "<ul>";

 ?>
<?php foreach ($data as $student) : ?>



<li id= "search_stu" student_id = "<?php echo $student['id']; ?>" student_name = "<?php echo $student['name']; ?>" student_roll = "<?php echo $student['roll']; ?>" student_reg = "<?php echo $student['reg']; ?>" style="list-style: none;"><?php echo $student['name']; ?><span> Roll :</span><?php echo $student['roll']; ?><span> Reg :</span><?php echo $student['reg']; ?></li>
</ul>

<?php endforeach; ?>