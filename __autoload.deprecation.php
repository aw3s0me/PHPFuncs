﻿<?php
	function __autoload($name) {
		echo "Want to load $name.\n";
		throw new MissingException("Unable to load $name.";
	}
	try {
		$obj = new NonLoadableClass();
	}
	catch(Exception $ex){
		echo $e->getMessage(), "\n";
	}
?>