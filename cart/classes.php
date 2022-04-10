
<?php
include('dbconnect.php');	
class signup{
	private $name;
	private $email;
	private $psw;
	private $cont;
	private $addrs;

	//setter function
	public function setname($name)
	{
		$this->name= $name;
	}	
	public function setemail($email)
	{
		$this->email= $email;	
	}
	public function setpsw($psw)
	{
		$this->psw= $psw;	
	}
	public function setcont($cont)
	{
		$this->cont= $cont;	
	}
	public function setaddrs($addrs)
	{
		$this->addrs=$addrs;	
	}
	
	//getter function
	public function getname()
	{
		return $this->name;
	}
	
	public function getemail()
	{
		return $this->email;
	}
	
	public function getpsw()
	{
		return $this->psw;
	}
	

	public function getcont()
	{
		return $this->cont;
	}
	
	public function getaddrs()
	{
		return $this->addrs;
	}
	
	
	public function insertdata()
	{
		$query="INSERT INTO signup(name, email, psw, cont, addrs)values('$this->name','$this->email','$this->psw','$this->cont','$this->addrs');";	
		$dbobj= new dbconnect();
		$ra=$dbobj->ExecuteDML($query);
		return $ra;
	}
	public function getdata()
	{
		$query="SELECT email, psw FROM signup WHERE email='$this->email' and psw='$this->psw';";
		//declare the object
		$obj= new dbconnect();
		$result= $obj->SelectVerify($query);	
		return $result;
	}
	public function getdata2()
	{
		$query="SELECT psw from signup where email='$this->email';";
		$obj= new dbconnect();
		$result=$obj->SelectSinglerowSinglecol($query);
		$this->psw=$result;
		
	}
}


?>