<?php
	namespace application\core;

	use application\core\View;
	use application\core\lib\Request;

	class Router
	{
		public $routes;
		public $request;
		protected $params = [];

	    public function __construct()
	    {
	        $this->routes = require_once('application/core/config/routes.php');
	        // $this->uri = trim($_SERVER['REQUEST_URI'], '/');
	        $this->request = new Request;
	    }

	    public function match()
	    {	
	    	foreach ($this->routes as $key => $val) {
	    		if(preg_match("#^$key$#", $this->request->getUri())){
	    			$this->params = $val;
	    			return true;
	    		}
	    	}
	    	return false;
	    }
	    public function run()
	    {
	    	if($this->match()){
	    		$path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
	    		$action = $this->params['action'].'Action';
	    		$controller = new $path($this->params);
	    		$controller->$action();
	    	}
	    	else{
	    		View::errorResponse(404, 'Страница не найдена');
	    	}
	    	// devPrint($this->uri);
	    }
	}