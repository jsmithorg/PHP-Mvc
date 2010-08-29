<?php

namespace Glg\Mvc
{
	class Route
	{
		public $command;
		public $parameters;
		public $arguments;
		
		public function __construct($url)
		{
			//foreach($_GET as $arg)
				//echo "GET: " . $arg;
				
			$url = trim($url, "/");
			$parts = explode("/", $url);
			$partCount = sizeof($parts);
			
			if($partCount < 1)
				$this->command = "index";
			else
				$this->command = $parts[0];
				
			/*for($i = 0; $i < $partCount; ++$i)
				echo "part: " . $parts[$i] . "<br />";
				
			$this->parameters = array_shift($parts);
			
			for($i = 0; $i < $partCount; ++$i)
				echo "part: " . $parts[$i] . "<br />";
				
			for($j = 0; $j < sizeof($this->parameters); $j++)
				echo "param: " . $this->parameters[i];
				*/
		}
		
		public static function createFromUrl($url)
		{
			return new Route($url);
		}
		
		public function __toString()
		{
			return "[ Route command=\"" . $this->command . 
				   "\" parameters=\"" . $this->parameters . "\" ]";
		}
	}

}

?>