<?php
	function Sanitize($string)
	{
		$string = mysql_real_escape_string($string);
		if (get_magic_quotes_gpc()) $string = stripslashes($string);
		$string = htmlentities($string);
		$string = strip_tags($string);
		return $string;
	}

?>