<?php
	require_once ("userattributes.php");
	require_once("duoapi/extservices.php");
	
	class UserLibrary {
		
		public function test(){
			echo "Hello  pamidu";
		}
		public function createUSer(){
			$data=json_decode(Flight::request()->getBody());
			$user=new User();
			
			$user->UserID=$data->UserID;
			$user->EmailAddress=$data->EmailAddress;
			$user->Name=$data->EmailAddress;
			$user->Password=$data->EmailAddress;
			$user->ConfirmPassword=$data->EmailAddress;
			$user->Active=false;
			
			$authproxyobj=new AuthProxy();
			$respond=$authproxyobj->AddUser($user);
			
			echo json_encode($respond);
			
			
	
			
			
		}
	
		function __construct(){
			Flight::route("GET /test", function (){$this->test();});
			Flight::route("POST /createuser", function(){$this->createUSer();});
			
		}
	}

?>