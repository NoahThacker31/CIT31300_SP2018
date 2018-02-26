<?php
class User extends Model{
	
	public function __construct(){
		parent::__construct();
	}

    public function __set($name,$value) {
        $this->$name = $value;
    }
	
    public function __get($name) {
        return $this->$name;
    }
	
	public function __destruct(){
		;
	}
	
	public function getName() {
        return array (
            'userid' => $this->userID,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'role' => $this->role
        );
    }
}
?>