<?php
class Database {
	private $host = "localhost";
	private $user = "postgres";
	private $port = "5433";
	private $pass = "";
	private $dbname = "ironware";
	
	private $dbh;
	private $error;
	private $stmt;
	private	$con; 
	
	public function __construct() {
		// Set DSN
		$dsn = 'pgsql:host=$host;port=$port;dbname=$dbname;';

		$options = array (
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
		);
		// Create a new PDO instanace	$pdo = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
		try {
			$this->dbh = new PDO('pgsql:host=$host;port=5433;dbname=$dbname;',$this->user,$this->pass, $options);
			if ($this->dbh) {
			echo "Connected to the  database successfully!";
			}
		}		// Catch any errors
		catch ( PDOException $e ) {
			$this->error = $e->getMessage();
		}
	}
	
	// Prepare statement with query
	public function query($query) {
		/*$con = pg_connect("host='localhost' port='5433' dbname='ironware' user='postgres' password=''");*/
		$this->stmt = pg_prepare($con,$query);
	}
	
	// Bind values
	public function bind($param, $value, $type = null) {
		if (is_null ($type)) {
			switch (true) {
				case is_int ($value) :
					$type = PDO::PARAM_INT;
					break;
				case is_bool ($value) :
					$type = PDO::PARAM_BOOL;
					break;
				case is_null ($value) :
					$type = PDO::PARAM_NULL;
					break;
				default :
					$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}
	
	// Execute the prepared statement
	public function execute(){
		return $this->stmt->execute();
	}
	
	// Get result set as array of objects
	public function resultset(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}
	
	// Get single record as object
	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_OBJ);
	}
	
	// Get record row count
	public function rowCount(){
		return $this->stmt->rowCount();
	}
	
	// Returns the last inserted ID
	public function lastInsertId(){
		return $this->dbh->lastInsertId();
	}
}