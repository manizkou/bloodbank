<?php 
include("database.php");
class Functions extends DataBase{
	function __construct(){
		parent::__construct();
		}
	
	function exec($sql){
		return $this->connection->query($sql);
		}

}

?>