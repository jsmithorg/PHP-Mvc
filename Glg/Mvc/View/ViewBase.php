<?php

namespace Glg\Mvc\View
{
	class ViewBase implements IView
	{
		public $id;
		public $theme;
		public $model;
		
		public function __construct($id = NULL)
		{
			$this->id = $id;
			
			ViewHelper::registerView($this, $id);
		}
		
		public function render()
		{
			$className = get_class($this);
			
			if(strpos($className, "\\"))
			{
				$classParts = explode("\\", get_class($this));
				if(sizeof($classParts) > 1)
					$className = $classParts[1];
			}
			
			if(strpos($className, "View"))
				$template = substr($className, 0, -4);
			else
				$template = $className;
				
			$template .= ".tpl.php";
			
			include("../../../Themes/Main/" . $template);
			
			//echo "rendering!!!!";
			//include("../../../Themes/" . $this->theme . "/Master.tpl.php");
			//return file_get_contents("../../../Themes/" . $this->theme . "/Master.tpl.php");
		}
		
		public function __toString()
		{
			return "[ ViewBase id=\"" . $this->id . "\" ]";
		}
		
		private function endsWith($str, $substr)
		{
			$str = strtolower($str);
    		// Recommended version, using strpos
    		return strrpos($str, $substr) === strlen($str)-strlen($substr);
		}

	}
}

?>