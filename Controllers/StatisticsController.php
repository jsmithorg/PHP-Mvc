<?php 

namespace Controllers
{
	class StatisticsController extends \Glg\Mvc\Controller\ControllerBase
	{
		private $_model;
		
		public function render()
		{
			$v = new \Views\StatisticsView("statsView");
			$v->model = $this->_model;
			
			parent::render();
		}
		
		public function execute()
		{
			$this->_model = new \Models\User;
			$this->_model->name = "Test User";
			$this->_model->description = "Test description";
			
			parent::execute();
			
			//execute any logic (ie commands) that modifies the model
		}
		
		public function get_view(){}
		public function get_model(){}
		
		public function __toString()
		{
			return "[ StatisticsController ]";
		}
	}
}

?>