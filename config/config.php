<?php
	
	class Database 
	{
		private $servername = "localhost";
		private $username   = "postgres";
		private $password   = "";
		private $dbname = "ironware";
		public $con;
		public $customerTable = "itemss";

		public function __construct()
		{
			try {
				$this->con = $con = pg_connect("host='localhost' port='5433' dbname='ironware' user='postgres' password=''");	
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		// Insert customer data into customer table
		public function insertRecond($title, $body)
		{
			$sql = "INSERT INTO $this->customerTable (title, body) VALUES('$title','$body')";
			$query = $this->con->query($sql);
			if ($query) {
				return true;
			}else{
				return false;
			}
		}

		// Fetch customer records for show listing
		public function displayRecord()
		{
			$query = "SELECT * FROM itemss";
			pg_query($this->con, $query);
			$data=pg_query($this->con, $query);
			return $data;
			$data = array();
			if (pg_num_rows($data) > 0) {
				while ($row = $query->fetch_assoc()) {
					$data[] = $row;
				}
				echo "true";
				return $data;
			}else{
				echo "false";
				return false;
			}
		}

		// Fetch single data for edit from customer table
		public function getRecordById($id)
		{
			$query = "SELECT * FROM $this->customerTable WHERE id = '$id'";
			$result = $this->con->query($query);
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				return $row;
			}else{
				return false;
			}
		}


		public function totalRowCount(){
			$query = "SELECT * FROM itemss";
			pg_query($this->con,$query);
			$result=pg_query($this->con,$query);
			$rowCount = pg_num_rows($result);
			return $rowCount;
		}

	}
?>