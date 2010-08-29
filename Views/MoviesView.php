<?php

namespace Views
{
	class MoviesView extends \Glg\Mvc\View\ViewBase
	{
		/*public function render()
		{
			//parent::render();
			include("../../../Themes/Main/Statistics.xml.tpl.php");
		}*/
		
		public function __toString()
		{
			return "[ MoviesView id=\"" . $this->id . "\" ]";
		}
	}
}

?>