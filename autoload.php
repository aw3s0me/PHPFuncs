<?php
	spl_autoload_register(null, false); //nullify any existing autoloads
	
	spl_autoload_extensions('.php,  .class.php, .lib.php'); //specify extensions
	
	function classLoader($className)
	{
		$filename = strtolower($className);
		$file = 'classes/'.$filename;
		if (!file_exists($file)){
			return false; //need reimplementation with catch-throw
		}
		include $file;
	}
	
	function libraryLoader($libraryName)
	{
		$filename = strtolower($libraryName);
		$file = 'libraries/'.$filename;
		if (!file_exists($file)){
			return false; //need reimplementation with catch-throw
		}
		include $file;
	}
	//register loader functions
	spl_autoload_register('classLoader'); 
	spl_autoload_register('libraryLoader');
	
?>