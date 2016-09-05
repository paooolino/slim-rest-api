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
	}
	
	private function setRoutes() {
		$this->slim->get('/users', '\SlimRest\Models\Users:getList');
		$this->slim->get('/countries', '\SlimRest\Models\Countries:getList');
	}
	
	public function run() {
		$this->slim->run();
	}
	
}
