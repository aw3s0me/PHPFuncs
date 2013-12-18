<?php
	class DbHelper {
		private $host;
		private $username;
		private $password;
		private $db_name;
		private $link;
		
		public function __construct($host, $username, $password, $db_name) (
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->db_name = $db_name;
		}
		
		private function error($message) {
			die($message." ".mysql_error());
			mysql_close($this->link);
		}
		
		public function Connect(){
			$this->link = mysql_connect($this->host, $this->username, $this->password);
			if (!$this->link) $this->error("Cannot connect to $db_name with host=$host");
			if (!mysql_select_db($this->db_name))$this->error("Cannot enter to $this->db_name");
		}
		
		public function RunQuery($query) {
			$result = mysql_query($query);
			if(!$result) $this->error("Cannot run query ".$query);
			return $result;
		}
		
	}
?>