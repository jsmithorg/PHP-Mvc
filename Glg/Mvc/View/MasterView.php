<?php

namespace Glg\Mvc\View
{
	class MasterView extends ViewBase
	{	
		public function render()
		{
			include("../../../Themes/Main/Master.tpl.php");
		}
		
		public function __toString()
		{
			return "[ MasterView id=\"" . $this->id . "\" ]";
		}
	}
}

?>