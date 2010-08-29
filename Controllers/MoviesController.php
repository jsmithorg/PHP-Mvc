<?php 

namespace Controllers
{
	class MoviesController extends \Glg\Mvc\Controller\ControllerBase
	{
		private $_model;
		
		public function render()
		{
			$v = new \Views\MoviesView("moviesView");
			$v->model = $this->_model;
			
			parent::render();
		}
		
		public function execute()
		{
			$this->_model = array();
			
			for($i=0;$i<10;$i++)
			{
				$m = new \Models\Movie;
				$m->title = "My Title " . $i;
				
				array_push($this->_model, $m);
			}
			
			//$this->_model = new \Models\User;
			//$this->_model->name = "Test User";
			//$this->_model->description = "Test description";
			
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