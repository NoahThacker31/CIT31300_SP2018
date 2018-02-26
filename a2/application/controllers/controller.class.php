<?php
	class controller{
		public $load;
		public $model;
	
		function __construct() {
			$this->load = new Load();
			$this->user = new User();
			$this->home();
		}
		
		public function __set($name,$value) {
			$this->$name = $value;
		}
	
		public function __get($name) {
			return $this->$name;
		}
	
		public function __destruct(){

		}
		
		function home() {
			$this->user->userID = 'nthacker';
			$this->user->firstName = "Noah";
			$this->user->lastName = "Thacker";
			$this->user->email="email@email.com";
			$this->user->role="admin";
			
			$data = $this->user->getName();
			$this->load->view('view.php', $data);		
		}
	}
?>

