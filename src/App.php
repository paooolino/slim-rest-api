<?php
namespace SlimRest;

class App {
	
	private $slim;
	private $db;
	
	public function __construct() {
		$this->slim = new \Slim\App(array(
			"settings" => array(
				"displayErrorDetails" => true,
			)
		));
		$this->db = new \SlimRest\DbManager;
		
		$this->setRoutes();
		/*
		$this->slim->get('/users', function (Request $request, Response $response) {
			$users = array("users", 1,2,3);
			$response->getBody()->write(json_encode($users));
			return $response;
		});
		
		$this->slim->get('/countries', function (Request $request, Response $response) {
			$users = array("countries", 1,2,3);
			$response->getBody()->write(json_encode($users));
			return $response;
		});
		*/
	}
	
	private function setRoutes() {
		$this->slim->get('/users', '\SlimRest\Models\Users:getList');
		$this->slim->get('/countries', '\SlimRest\Models\Countries:getList');
	}
	
	public function run() {
		$this->slim->run();
	}
}
