<?php
	class Model{
		
		protected $userID;
		protected $firstName;
		protected $lastName;
		protected $email;
		protected $role;
	
		function __construct(){
			//will get to this at a later date
		}
		
		public function __set($name, $value){
			$this->$name = $value;
		}
	
		public function __get($name){
			return $this->$name;
		}
	
		public function __destruct(){
			
		}
	}
?>