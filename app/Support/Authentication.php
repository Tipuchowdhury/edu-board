<?php 

namespace Edu\board\Support;
use Edu\board\Support\Database;
use PDO;
/**
 * log in to admin panel
 */
class Authentication extends Database
{

	public function test()
	{
		echo "test test test";
	}
/**
 * User varification
 */
	public function LoginToAdmin($ue, $pass) {
		$info = $this-> CheckUsername_or_email($ue);
		$num = $info['num'];

		$log_in_data = $info['data']->fetch(PDO::FETCH_ASSOC);
		if ($num== 1) {

			if (password_verify($pass, $log_in_data['pass'])) {

				$_SESSION ['id']  = $log_in_data['id'];
				$_SESSION ['name']  = $log_in_data['name'];
				$_SESSION ['pass']  = $log_in_data['pass'];
				$_SESSION ['email']  = $log_in_data['email'];
				$_SESSION ['role']  = $log_in_data['role'];
				$_SESSION ['photo']  = $log_in_data['photo'];

				header('location: dashboard.php');
			}
			else {
				return "<p class = 'alert alert-warning'>Password is incorrect <button class= 'close' data-dismiss ='alert'>&times </button></p>";
			}
		}
		else{
			return "<p class = 'alert alert-danger'>Username or Email is incorrect <button class= 'close' data-dismiss ='alert'>&times </button></p>";
		}

	}
/**
 * Login system
 */
	public function CheckUsername_or_email($ue) {
		return $this->CheckFromDatabase("users", $ue);

	}

/**
 * logout system
 */
	public function UserLogout(){
		session_destroy();
		header('location:index.php');
	}
	
}

 ?>