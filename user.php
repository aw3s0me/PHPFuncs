<?php

	include_once 'sanitize.php';
	
	class User
	{
		private $username;
		private $password;
		
		public __construct($username, $password)
		{
			$this->username = Sanitize($username);
			$this->password = Sanitize($password);
		}
		
	}

?>