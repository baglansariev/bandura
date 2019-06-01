<?php
	namespace application\controllers;

	use application\core\Controller;

	class MainController extends Controller
	{

	    public function indexAction()
	    {
	    	$test = $this->load->controller('TestController');
	    	$data['test'] = $test;
	    	$this->view->asset->setMetaDesc('Тестовое описание');
	    	$this->view->asset->setMetaKeys('ключ1, ключ2');
	    	$this->view->render('Main', $data);
	    }
	}
