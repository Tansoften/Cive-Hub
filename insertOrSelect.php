<?php
		class InsertToDb
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
			}
			public function setdb($db)
			{
				$this->con = mysqli_connect($this->servername,$this->username,$this->password);
				mysqli_select_db($this->con,$db);
			}
			public function insertValues($sql)
				{
					$result = mysqli_query($this->con,$sql);
					return $result;
				}

				public function deleteData($sql)
				{
					$result = $this->con->query($sql);
					return $result;
				}
		}

	
?>