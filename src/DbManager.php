<?php

namespace SlimRest;

use RedBeanPHP\R as R;

class DbManager {
	
	public function __construct() {
		R::setup( 'mysql:host='. Config\DB_HOST .';dbname=' . Config\DB_NAME, Config\DB_USER, Config\DB_PASS );
	}
	
}
