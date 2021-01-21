<?php 

namespace Edu\board\Controller;

use Edu\board\Support\Database;

/**
 * Users class
 */
class Users extends Database
{

	/**
	 * create a new user by submiting add new user form
	 */
	public function CreateUser($data)
	{

		$mess = $this-> Create_data("users", [

			'name'  => $data['name'],
			'email'  => $data['email'],
			'user_name'  => $data['uname'],
			'role'  => $data['role'],
			'pass'	=> password_hash($data['pass'], PASSWORD_DEFAULT),

		]);
		if ($mess) {
			return "<p class = 'alert alert-success'>Registration successfully <button class= 'close' data-dismiss ='alert'>&times </button></p>";
	}
		}
	

	/**
	 * user password change
	 */
	public function Update_Password($id, $new){
		$this->Password_update_single_users('users', $id, [

			"pass" => password_hash($new, PASSWORD_DEFAULT),
		]);

		return $mess = "<p class = 'alert alert-warning'>Password changed successfully <button class= 'close' data-dismiss ='alert'>&times </button></p>";
	}

	/**
	 * show all register users 
	 */
	public function showAll()
	{
		$data = $this-> Show_data('users');
		return $data;
	}
	
}


 ?>