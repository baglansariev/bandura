<?php
	namespace application\core\lib;

	class Loader
	{
		public function __construct()
		{

		}

		public function controller($name)
		{
			$path = '\application\controllers\\'.ucfirst($name);
			if(class_exists($path)){
				$controller = new $path;
			}
		}

		public function controller($name, $arr=[])
		{
			extract($arr);
			
			$path = '\application\controllers\\'.ucfirst($name);
			if(class_exists($path)){
				$controller = new $path;
			}
		}

	}
