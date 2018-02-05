<?php
class admin_user extends user{
	function __construct($userLevel, $userId){
		parent::__construct($userLevel);
		$this->set_user_id($userId);
		$this->set_fname("Della");
		$this->set_lname("Dillon");
		$this->set_email("della@test.com");
		$this->set_user_type(2);
	}

	public function __destruct(){
		;
	}
}
?>