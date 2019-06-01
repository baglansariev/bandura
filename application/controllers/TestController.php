<?php
	namespace application\controllers;

	use application\core\Controller;

	class TestController extends Controller
	{
		public function test()
		{
			return ['a', 's', 'j'];
		}
	}
