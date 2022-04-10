<?php
class dbconnect{
	private $servername="localhost";
	private $username="root";
	private $password="";
	private $dbname="dblogin";

	public function ExecuteDML($query)
	{
		$con=mysqli_connect($this->servername, $this->username,$this->password,$this->dbname);
		if(mysqli_connect_errno() == true)
		{
			die('Unable to connect');
		}
		if(mysqli_query($con,$query)==false)
		{
			die("Invalid Query - $query ");
		}
		$ra = mysqli_affected_rows($con); 
		mysqli_close($con);
		return $ra;
	}
	
	public function SelectVerify($query)
	{
		$con=mysqli_connect($this->servername, $this->username,$this->password,$this->dbname);
		if(mysqli_connect_errno() == true)
		{
			die('Unable to connect');
		}
		$result = mysqli_query($con,$query);
		$numrows = mysqli_num_rows($result);
		mysqli_close($con);
		return $numrows;
	}
	
	public function SelectRetreive($query)
	{
		$con=mysqli_connect($this->servername, $this->username,$this->password,$this->dbname);
		if(mysqli_connect_errno() == true)
		{
			die('Unable to connect');
		}
		$result = mysqli_query($con,$query);
	
		return $result;
	}
	public function SelectSinglerowSinglecol($query)
	{
		$con=mysqli_connect($this->servername, $this->username,$this->password,$this->dbname);
		if(mysqli_connect_errno() == true)
		{
			die('Unable to connect');
		}
		$result=mysqli_query($con,$query);
		$numrows = mysqli_num_rows($result);
		if($numrows > 0)
		{
			$row= mysqli_fetch_array($result, MYSQLI_NUM);
			$res=$row[0];	
		}
		else
		{
			$res=null;
		}
		mysqli_close($con);
		return $res;
	}
	
}





?>