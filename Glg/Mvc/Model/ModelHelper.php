<?php

namespace Glg\Mvc\Model
{
	class ModelHelper
	{	
		public static function getModelForView($id = NULL)
		{
			$view = \Glg\Mvc\View\ViewHelper::getView($id);
			return $view->model;
		}
		
	}
}

?>