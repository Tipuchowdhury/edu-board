<?php 

	require_once "../../../config.php";
	require_once "../../../vendor/autoload.php";

	use Edu\board\Controller\Users;

	$user = new Users;
	$data = $user -> showAll();
	$all_data = $data->fetchAll();

	$id = 1;
	foreach ($all_data as $value):?>

		<tr>
                    <td> <?php echo $id; $id++; ?> </td>
                    <td> <?php echo $value['name']; ?> </td>
                    <td><?php echo $value['email']; ?></td>
                   
                    <td><?php echo $value['role']; ?></td>
                    <td><img style= "width: 50px;height: 50px;"src="images/<?php echo $value['photo']; ?>" alt=""></td>
                    <td><?php echo $value['status']; ?></td>
                    <td>
                        <a class= "btn btn-primary btn-sm" href="#">Edit</a>
                        <a class= "btn btn-warning btn-sm" href="#">Update</a>
                        <a id= "del_user" class= "btn btn-danger btn-sm" href="">Delete</a>
                    </td>
                </tr>

<?php endforeach ?>
