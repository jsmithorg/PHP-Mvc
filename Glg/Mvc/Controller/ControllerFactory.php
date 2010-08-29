<?php

namespace Glg\Mvc\Controller
{
	class ControllerFactory
	{
		public static function create(\Glg\Mvc\Route $route)
		{
			$c = "\\Controllers\\" . ucfirst($route->command) . "Controller";
			$file = "../../.." . str_replace("\\", "/", $c) . ".php";
			
			if(!file_exists($file))
				throw new ControllerException("The controller \"" . $c . "\" could not be created. The file \"" . $file . "\" does not exist.");
				
			$instance = new $c;
			$instance->theme = "Main";
			
			/*$interfaces = class_implements($c);
			echo "interfaces: " . count($interfaces);
			for($i = 0;$i<count($interfaces);$i++)
				echo "interface: " . $interfaces[$i];
				*/
				
			if(!$instance instanceof IController)
				throw new ControllerException("The controller \"" . $c . "\" must extend the \Glg\Mvc\Controller\ControllerBase class or implement the \Glg\Mvc\Controller\IController interface");
			
			$instance->route = $route;
			
			return $instance;
		}
	}

}

?>