<?php

namespace Glg\Mvc\Model
{
	class ModelBase implements IModel
	{	
		 public function __get($key)
		 {
		 	$method = "get_" . $key;
		 	if(method_exists($this, $method))
		 		return $this->$method();
		 		
		 	throw new \Exception("Could not get property: " . $key);
		 
		 }
		 
		 public function __set($key, $value)
		 {
		 	$method = "set_" . $key;
		 	if(method_exists($this, $method))
		 		return $this->$method($value);
		 		
		 	throw new \Exception("Could not set property: " . $key);
		 }
		 
		 public function __toString()
		 {
		 	return "[ " . get_class($this) . "\" ]";
		 }
	}
}


?>