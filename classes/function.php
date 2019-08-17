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
				$up=move_uploaded_file($i_temp,'./'.$d.'/'.$i_name);
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
	function getDonar(){
		$sql="select*from tbl_donarreg";
		$resutl=$this->exec($sql);
		return $resutl;
	}

	function getTeamd($id){
		$sql="select*from tbl_donarreg where id='$donorid'";
		$resutl=$this->exec($sql);
		return $resutl->fetch_assoc();
	}

	function del($id,$p,$t,$in,$dir){
		$sql="Delete from $t where id='$id'";
		$result=$this->exec($sql);
		if($result){
			if(!empty($in)){
				$del=unlink('../'.$dir.'/'.$in);
				if($del){
					$this->redirect('dashboard.php?pg='.$p.'');
				}
			}else{
				$this->redirect('dashboard.php?pg='.$p.'');
			}
		}else{
			$this->error("Error ");
		}
	}
	function getDonorFilter(){
		$sql="select*from ".DONORREGISTER."";
		$result=$this->exec($sql);
		return $result;

	}
	function getFilter(){
		$query ="select*from tbl_donarreg";
		$result=$this->exec($query);
		return $result->fetch_assoc();
	}
	function getDataFilter(){
		$query ="select*from tbl_donarreg";
		$result=$this->exec($query);
		$output = '';
		if($result && $result->num_rows >0){
			foreach($result as $row)
			{
				$output .= '
				<div class="col-sm-6 col-md-3">
				<div class="card">
				<img class="card-img-top" src="donorimg/'.$row['image'].'" alt="" width="360px" height="200px">
				<div class="card-body">
				<p><i class="fas fa-user-alt"></i>' . ' &nbsp;' . $row['name'] .'</p>
				<p><i class="fas fa-tint red"></i>' . ' &nbsp;' . $row['bloodgroup'] .'</p>
				<p><i class="fas fa-user-circle"></i>' . ' &nbsp;' . $row['availability'] .'</p>
				<p><i class="fas fa-location-arrow"></i>' . ' &nbsp;' . $row['address'] .'</p>
				<p><i class="fas fa-mobile-alt"></i>' . ' &nbsp;' . $row['contact'] .'</p>



				</div>

				</div>
				</div> ';

			}

		}
		else{
			$output = '<h3>No Data Found</h3>';

			echo $output;
		}


	}
	function userData($u){
		$sql="select*from tbl_admin where user='$u'";
		$result=$this->exec($sql);
		return $result->fetch_assoc();
		
	}

	function cngProfile($n,$u,$e,$i){
		$sql="update tbl_admin SET name='$n',user='$u',email='$e' where id='$i'";
		$result=$this->exec($sql);
		if($result){
			$this->redirect("dashboard.php?pg=editU.php&smg=ProfileChange Successful");
		}
	}
	function cngPassword($u,$p){
		$sql="update tbl_admin SET password='$p' where user='$u'";
		$result=$this->exec($sql);
		if($result){
			$this->redirect("dashboard.php?pg=chgPass.php&smg=Password Change Successful");
		}
	}

}

?>