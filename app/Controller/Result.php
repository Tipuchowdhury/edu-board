<?php 

namespace Edu\board\Controller;

use Edu\board\Support\Database;
use PDO;

/**
 * Result class
 */
class Result extends Database
{
	/**
	* adding student result 
	*/
	public function AddResult($data)
		{
			$this->Create_data('results', [
				"stu_id"		=> $data['student_id'],
				"bangla"		=> $data['bangla'],
				"english"		=> $data['english'],
				"math"			=> $data['math'],
				"science"		=> $data['science'],
				"ss"			=> $data['ss'],
				"religion"		=> $data['religion'],

			]);
		}
		public function SearchResult($exam, $year, $board, $roll, $reg)
			{
				 $result = $this-> CustomQuery("SELECT * FROM students INNER JOIN results ON students.id=results.stu_id  WHERE students.roll = '$roll' AND students.reg = '$reg'");

				 return $result -> fetch(PDO::FETCH_ASSOC);

			}	
}	


 ?>