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
	function DonorRegister($name,$bloodgroup,$contact,$landlinecontact,$city,$address,$email,$availability,$i_name){

		$sql="insert into tbl_donarreg(name,bloodgroup,contact,landlinecontact,city,address,email,availability,image) values('$name','$bloodgroup','$contact','$landlinecontact','$city','$address','$email','$availability','$i_name')";
		$reg=$this->exec($sql);
		// if($reg){
		// 	$this->redirect('./dashboard.php?pg='.$p.'&smg=Operation Successful');
		// }else{
		// 	$this->error("Error Insert");
		// }
	}
	function UploadFile($i_name,$i_size,$i_type,$i_temp,$d){

		if($i_type=='image/jpeg' || $i_type=='image/png' || $i_type=='image/gif'){

			if($i_type<=8388608){
				$up=move_uploaded_file($i_temp,$i_name);
				if($up){
					return 1;
				}
			}else{
				return "Image Size very Large !";
			}

		}else{
			return "Invalid Image Type";
		}




	}
}

?>