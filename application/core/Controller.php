<?php
	namespace application\core;

	use application\core\View;
	use application\core\lib\Request;
	use application\core\lib\Loader;

	abstract class Controller
	{
		public $route;
		public $view;
		public $model;
		public $request;
		public $load;

		public function __construct()
		{
			$this->request = new Request;
			$this->load = new Loader;
			$this->route = $route;
			$this->view = new View($route);
			// $this->getModel($route['controller']);
		}

		public function getModel($name)
		{
			$path = '\application\models\\'.ucfirst($name);
			if(class_exists($path)){
				$this->model = new $path;
			}
		}
	}