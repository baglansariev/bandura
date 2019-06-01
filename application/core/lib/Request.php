<?
	namespace application\core\lib;

	class Request
	{
		private $uri;

		public function __construct()
		{
			$this->uri = trim($_SERVER['REQUEST_URI'], '/');
		}

		public function getUri()
		{
			return $this->uri;
		}
	}
