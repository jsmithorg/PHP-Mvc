<?php

namespace Glg\Mvc\View
{
	class ViewHelper
	{
		private static $_views;
		
		public static function registerView(IView $view, $id = NULL)
		{
			self::$_views[$id] = $view;
		}
		
		public static function getView($id = NULL)
		{
			return self::$_views[$id];
		}
		
		public static function renderView($id = NULL)
		{
			$view = self::$_views[$id];
			$view->render();
		}
		
		public static function removeView($id = NULL)
		{
		
		}
	}
}

?>