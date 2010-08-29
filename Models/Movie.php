<?php

namespace Models
{
	class Movie extends \Glg\Mvc\Model\ModelBase
	{	
		 public $title;
		 public $description;
		 public $length;
		 
		 public function __toString()
		 {
		 	return "[ Movie title=\"" . $this->title . "\" ]";
		 }
	}
}

?>