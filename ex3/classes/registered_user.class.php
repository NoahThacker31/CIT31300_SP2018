<?php
class registered_user extends user{
	function __construct($userLevel, $userId){
		parent::__construct($userLevel);
		$this->set_user_id($userId);
		$this->set_fname("Rob");
		$this->set_lname("Dillon");
		$this->set_email("rdillon@iupui.edu");
		$this->set_user_type(1);
	}
	
	public function __destruct(){
		;
	}
	
	public static function mathmaticEquation($a, $b){
		return ($a+$b)*$a;
	}
}
?>