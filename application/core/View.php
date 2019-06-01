<?php
	namespace application\core;

	use application\core\lib\Asset;

	class View
	{
		public $route;
		public $path;
		public $asset;
		public $layout = 'default';

		public function __construct()
		{
			// $this->route = $route;
			// $this->path = ucfirst($route['controller']).DS.$route['action'];
			$this->asset = new Asset;
		}

		// public function render($title, $arr = [])
		// {
		// 	extract($arr);

		// 	ob_start();
		// 	require_once('application/views/'.$this->path.'.php');
		// 	$content = ob_get_clean();
			
		// 	require_once('application/views/layouts/'.$this->layout.'.php');
		// }

		public static function errorResponse($type, $title)
		{
			http_response_code($type);
			$content = obInclude('application/views/errors/'.$type.'.php');
			require_once('application/views/layouts/default.php');
			exit();
		}

	}

