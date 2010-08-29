<?php

namespace Glg\Mvc\Controller
{
	abstract class ControllerBase implements IController
	{
		public $route;
		public $theme;
		
		public function execute()
		{
			$this->render();
		}
		
		public function render()
		{
			$v = new \Glg\Mvc\View\MasterView("masterView");
			$v->render();
			
			//include("../../../Themes/" . $this->theme . "/Master.tpl.php");
		}
		
		public abstract function get_view();
		public abstract function get_model();
	}
}

?>