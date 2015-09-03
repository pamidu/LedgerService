<?php
	// require_once (BASE_PATH . "/duoapi/extservices.php");
	class TestService {
		public function test(){
			echo "Hello World!!!";
		}

		function __construct(){
			Flight::route("GET /testtest", function (){$this->test();});
		}
	}
?>
