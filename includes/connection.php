<?php 
 class Database
{
	private	$username ;
	private	$password ;
	private	$servername ;
	private $result;
	private $con;
	function __construct()
	{
	
		$this->username = 'root';
		$this->password ='';
		$this->servername ='localhost';
		$this->setconn('civehubdb');
	}
	public function setconn($db)
	{
		$this->con = mysqli_connect($this->servername,$this->username,$this->password) or die("establish connection to your server");;

		mysqli_select_db($this->con,$db) or die("Selected Database is not found");
	}
	public function results($sql)
	{
		$result = mysqli_query($this->con,$sql);
		return $result;
	}

	public function select()
	{
		if (mysqli_num_rows($this->result) > 0)
			$val =  $row['Id'];
			return $val;
	}
}


 ?>