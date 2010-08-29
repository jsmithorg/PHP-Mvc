<?php

namespace Views
{
	class StatisticsView extends \Glg\Mvc\View\ViewBase
	{
		/*public function render()
		{
			//parent::render();
			include("../../../Themes/Main/Statistics.xml.tpl.php");
		}*/
		
		public function __toString()
		{
			return "[ StatisticsView id=\"" . $this->id . "\" ]";
		}
	}
}

?>