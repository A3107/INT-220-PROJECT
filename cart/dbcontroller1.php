<?php
class DBController
{
	private $servername="localhost";
	private $username="root";
	private $password="";
	private $dbname="onlineorder";
	private $conn;
	
	function __construct()
	{
		$this->conn= $this->connectDB();
	}
	function connectDB()
	{
		$conn=mysqli_connect($this->servername,$this->username, $this->password,$this->dbname);
		return $conn;
	}
	function runquery($query)
	{
		$result=mysqli_query($this->conn, $query);
		while($row=mysqli_fetch_assoc($result))
		{
			$resultset[]=$row;
		}
		if(!empty($resultset))
		{
			return $resultset;
		}
	}
	function numRows($query)
	{
		$result = mysqli_query($this->conn, $query);
		$rowcount=mysqli_num_rows($result);
		return $rowcount;
	}
}


?>