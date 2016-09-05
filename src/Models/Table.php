<?php

namespace SlimRest\Models;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class Table {
	protected $tablename;
	
	public function getList(Request $request, Response $response) {
		$data = array($this->tablename, 1, 2, 3);
		$response->getBody()->write(json_encode($data));

		return $response;
	}
}
