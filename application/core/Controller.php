<?php
	namespace application\core;

	use application\core\View;
	use application\core\lib\Request;

	abstract class Controller
	{
		public $route;
		public $view;
		public $model;
		public $request;

		public function __construct($route)
		{
			$this->request = new Request;
			$this->route = $route;
			$this->view = new View($route);
			$this->getModel($route['controller']);
		}

		public function getModel($name)
		{
			$path = '\application\models\\'.ucfirst($name);
			if(class_exists($path)){
				$this->model = new $path;
			}
		}
	}