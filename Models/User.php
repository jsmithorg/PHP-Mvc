<?php

namespace Models
{
	class User extends \Glg\Mvc\Model\ModelBase
	{	
		 private $description;
		 public function get_description(){ return $this->description; }
		 public function set_description($value){ $this->description = $value; }
		 
		 public $age;
		 
		 private $name;
		 public function get_name(){ return $this->name; }
		 public function set_name($value){ $this->name = $value; }
		 
	}
}

?>