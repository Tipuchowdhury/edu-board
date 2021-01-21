<?php 

namespace Edu\board\Controller;

use Edu\board\Support\Database;
use PDO;

/**
 * Users class
 */
class Student extends Database
{
	public function CreateStudent($data)
	{
		$this->Create_data('students', [

			'name' => $data['name'],
			'roll' => $data['roll'],
			'reg' => $data['reg'],
			'exam' => $data['exam'],
			'institute' => $data['ins'],
			'board' => $data['board'],
			'year' => $data['year'],
			
		]);
	}

	public function allStudents()
	{
		$data = $this-> Show_data('students');
		return $data->fetchAll(PDO::FETCH_ASSOC);
	}


	/**
	 * search student for result
	 */
	public function StudentSearch($search)
	{
		$data = $this-> CustomQuery("SELECT * FROM students WHERE name LIKE '%$search%' || roll LIKE '%$search%' || reg LIKE '%$search%'");
		return $data->fetchAll(PDO::FETCH_ASSOC);
	}
}	


 ?>