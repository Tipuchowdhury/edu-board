<?php 

	namespace Edu\board\Support;
	use PDO;
/**
 * Database Management
 */
abstract class Database
{

	private $host= HOST;	
	private $user= USER;	
	private $pass= PASS;	
	private $db= DB;
	private $connection;

	/**
	* database connection 
	*/	

	private function Connection() {
		return $this->connection = new PDO("mysql:host=".$this->host.";dbname=".$this->db, $this-> user, $this-> pass);
	}

	public function CheckFromDatabase($tbl_name, $ue) {
		$stmt = $this->Connection()->prepare("SELECT * FROM $tbl_name WHERE user_name= '$ue' || email = '$ue'");
		$data = $stmt-> execute();
		$num = $stmt-> rowCount();
		return [
			'num'	=> $num,
			'data'	=> $stmt
		];


	}
	/**
	 * password update of a single user
	 */
	public function Password_update_single_users($tbl_name, $id, array $data){
		
		$query_string = '';
		foreach ($data as $key => $val) {
			$query_string .="$key = '$val' ,";		
		}
		 $query_array = explode(' ', $query_string);
		 array_pop($query_array);
		 $final_query_string = implode(' ', $query_array);
		 $stmt = $this->Connection()->prepare("UPDATE $tbl_name SET $final_query_string WHERE id= '$id'");
		$data = $stmt-> execute();
	}

	/**
	 * create data
	 */
	public function Create_data($table, $data)
	{
		

		// make sql collum from data
		$array_key = array_keys($data);
		$array_col = implode(' , ', $array_key);

		// make sql values from data

		$array_val = array_values($data);
		foreach ($array_val as $value) {
			$form_value[] = " ' ". $value. " ' ";
		}
		$array_value = implode(" , ", $form_value);


		// data send to ta table
		$sql = "INSERT INTO $table ($array_col) VALUES ($array_value)";
		$smtp = $this->Connection()->prepare($sql);
		$smtp -> execute();

		if ($smtp) {
			return true;
		}
		else {
			return false;
		}
	}

	/**
	 * find a data
	 */
	public function Find_data($id)
	{
		# code...
	}
	/**
	 * delete data
	 */
	public function Delete_data($id)
	{
		# code...
	}
	/**
	 * show all data
	 */
	public function Show_data($table, $order= 'DESC')
	{
		$sql = "SELECT * FROM $table ORDER BY id $order";
		$smtp = $this->Connection()->prepare($sql);
		$smtp -> execute();
		return $smtp;
	}

	/**
	 * custom query
	 */
	public function CustomQuery($query)
	{
		$sql = $query;
		$smtp = $this->Connection()->prepare($sql);
		$smtp -> execute();
		return $smtp;
	}

}


 ?>