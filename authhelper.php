<?php
	include_once 'autoload.php';
	class AuthHelper
	{
		public $user;
		private $table_name;
		private $dbhelper;
		
		public __construct($username, $password, $table_name, $dbhelper) 
		{
			$this->table_name = $table_name;
			$this->user = new User($username, $password);
			$this->dbhelper = $dbhelper;
		}
	
		public MysqlAuthenticate(){
			if (!dbhelper || !user) return;
			$query = "SELECT * FROM $table_name WHERE username='$user->$username' AND password='$user->$password'";
			$result = $dbhelper->RunQuery($query);
			return $result;
		}
	
	}
	
?>