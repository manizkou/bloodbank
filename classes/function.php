<?php 
include("database.php");
class Functions extends DataBase{
	function __construct(){
		parent::__construct();
	}
	
	function exec($sql){
		return $this->connection->query($sql);
	}

	function loginChk($user,$pass){
		$sql="select*from tbl_admin where user='$user' and password='$pass'";
		$result=$this->exec($sql);
		if($result && $result->num_rows==1){
			return 1;
		} else
		{
			return 0; 	
		}
		
	}

}

?>