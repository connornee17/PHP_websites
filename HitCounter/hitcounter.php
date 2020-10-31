<?php
	class HitCounter {
		
		public $conn;
		public $count;

		function __construct() { 
			require_once ("/home/students/accounts/s102061410/cos30020/www/data/lab10/mykeys.inc.php");
			$this->conn = @mysqli_connect($host,
				$user,
				$pswd,
				$dbnm
			);	
		}

		function getHits () {
			$sql = "SELECT hits FROM hitcounter WHERE id = 1";
			$queryResult = mysqli_query($this->conn, $sql);
			$row = mysqli_fetch_row($queryResult);

			$this->count = $row[0];
			echo $this->count;
		} 

		function setHits() {
			$this->count +=1;
			$sql1 = "UPDATE hitcounter SET hits = $this->count WHERE id = 1";
			$Result = mysqli_query($this->conn, $sql1);
		}

		function closeConnection () {
			mysqli_close($this->conn);
		}

		function startOver() {
			$this->count = 0;
			$sql2 = "UPDATE hitcounter SET hits = $this->count WHERE id = 1";
			$Result1 = mysqli_query($this->conn, $sql2);
		}

		
	}
?>