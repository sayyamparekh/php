<?php
class Database{
	private $conn;
	public function __construct(){
		$this->conn=mysqli_connect("localhost","root","","db_oop");
		
		if(mysqli_connect_errno()){
			die("Connection Fail: ".mysqli_connect_error());
		}
		else{
			//echo "Connection Success";	
		}
	}
	
		
		public function IsLogin($table,$username,$password){
			$query=mysqli_query($this->conn,"SELECT * FROM $table WHERE username='$username' AND password='".sha1($password)."'");
			if(mysqli_num_rows($query)>0){
				session_start();
				$row=mysqli_fetch_assoc($query);
				$_SESSION['name']=$row['name'];
				return true;
			}
			else{
				return false;
			}
		}
	public function getAll($table){
			$query=mysqli_query($this->conn,"SELECT * FROM $table");
			if(mysqli_num_rows($query)>0){
				return mysqli_fetch_all($query,MYSQLI_ASSOC);
			}
	}
	
	public function getById($table,$id){
		$query=mysqli_query($this->conn,"SELECT * FROM $table WHERE id=$id");
			if(mysqli_num_rows($query)>0){
				return mysqli_fetch_assoc($query);
			}
	}
	
	public function UpdateById($table,array $columns,$id){
		
		$sql="UPDATE $table SET ";
		foreach($columns as $key=>$val){
			$sql.=$key."='".$val."',";
		}
	
		//echo $sql;
				
		$sql2=substr($sql,0,-1);
		//echo $sql2;
		$sql2.=" WHERE id=$id";
		
		$query=mysqli_query($this->conn,$sql2);
		
		if(mysqli_affected_rows($this->conn)>0){
			echo "success";
			return true;
		}
		else {
			echo "fail";
			return false;
		}

	}
	
	/*public function DeleteById($table,$id){
			$query=mysqli_query($this->conn,"Delete FROM $table WHERE id=$id");
			if(mysqli_affected_rows($this->conn)>0){
				return "Delete Success";
			}
			else{
				return "Delete Fail!";	
			}
	}*/
	
	
	
	public function Insert($table,$username,$name,$password){
		
		$query=mysqli_query($this->conn,"INSERT INTO $table SET username='$username',name='$name',password='".sha1($password)."'");
		
		if(mysqli_affected_rows($this->conn)>0){
			return true;
		}
		
		else{
			return false;	
		}
		
	}


public function deleteById($table,$id){
	$query=mysqli_query($this->conn,"DELETE FROM $table WHERE id=$id");
	
	if(mysqli_affected_rows($this->conn)>0){
		return true;
	}
			else{
				return false;
			}
		}
			
}

$obj=new Database;
