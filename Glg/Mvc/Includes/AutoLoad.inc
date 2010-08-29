<?php 

class AutoLoad
{
	public static function load($class_name) 
	{
		$c = "../../../" . str_replace("\\", "/", $class_name);
   		require_once($c . ".php");
	}
}

spl_autoload_register(array("AutoLoad", "load")); 

?>