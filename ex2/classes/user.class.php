<?php
class user{
	protected $user_id;
	protected $user_type;
	protected $first_name;
	protected $last_name;
	protected $email_address;
	protected $user_level;

	var $userId;
	var $userType;
	var $firstName;
	var $lastName;
	var $email;
	var $userLevel;
	
	public function set_user_id($userId){
		$this->user_id = $userId;
	}
	public function set_user_type($userType){
		$this->user_type = $userType;
	}
	public function set_fname($firstName){
		$this->first_name = $firstName;
	}
	public function set_lname($lastName){
		$this->last_name = $lastName;
	}
	public function set_email($email){
		$this->email_address = $email;
	}
	public function set_user_level($userLevel){
		$this->user_level = $userLevel;
	}
	
	public function get_user_id(){
		return $this->user_id;
	}
	public function get_user_type(){
		return $this->user_type;
	}
	public function get_fname(){
		return $this->first_name;
	}
	public function get_lname(){
		return $this->last_name;
	}
	public function get_email(){
		return $this->email_address;
	}
	public function get_user_level(){
		return $this->user_level;
	}
	
	function __construct($userLevel){
		$this->set_user_level($userLevel);
	}
	
	public function __destruct(){
		;
	}
}
?>