<?php
class gadget{
	public $db;
	
	public function __construct(){
		$this->db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
		if(mysqli_connect_errno()){
			echo "Database connection error.";
			exit;
		}
	}
	
	public function get_gadget(){
		$sql = "SELECT * FROM tbl_gadget";
		$result = mysqli_query($this->db,$sql);
		while($row = mysqli_fetch_assoc($result)){
			$list[] = $row;
		}
		return $list;
	}
	
}
?>
