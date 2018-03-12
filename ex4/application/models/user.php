<?php
class User extends Model{
	public $uID;
	public $first_name;
	public $last_name;
	public $email;
	protected $user_type;
	
	public function __construct()
	{
		parent::__construct();
		if(isset($_SESSION["uID"])
		{
			$userInfo = $this->getUserFromID($_SESSION);
			
			$this->uID = $userInfo['uID'];
			$this->first_name = $userInfo['first_name'];
			$this->last_name = $userInfo['last_name'];
			$this->email = $userInfo['email'];
			$this->user_type = $userInfo['user_type'];
		}
	}
	
    function getUser($uID)
    {
        $sql = "SELECT uID, email, first_name, last_name, user_type, active FROM users
				WHERE uID = ?";
        $result = $this->db->getrow($sql, array($uID));
        $user = $result;
        return $user;
    }

    public function getUsers($limit = 0)
    {
        if($limit > 0)
        {
            $numusers = ' LIMIT '.$limit;
        }
		$sql = "SELECT first_name, last_name, email, uID FROM users";
        $results = $this->db->execute($sql);
        while($row = $results->fetchrow())
        {
            $users[] = $row;
        }
        return $users;
    }
	
	public function getUserName()
	{
		return $this->first_name.' '.$this->last_name;
	}
	
	public function getEmail()
	{
		return $this->email;
	}
	
	public function isRegistered()
	{
		if(isset($this->user_type))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function isAdmin()
	{
		if($this->user_type == '1')
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
    public function addUser($data){
		var_dump($data)
		$uID = $_POST["post_uID"];
		$email = $_POST["post_email"];
		$password = $_POST['post_password'];
		$fname = $_POST['post_fname'];
		$lname = $_POST['post_lname'];

		$sql="INSERT INTO users (email, password, first_name, last_name) VALUES (?,?)";
		$this->db->execute($sql,$data);
		$message = 'User added.';
		return $message;
	}
	
	public function checkUser($email, $password)
	{
		$SQL = "SELECT email, password FROM users WHERE email = ?";
		results = this->db->getrow($SQL, array($email));
		$user=$results;
		
		$password_db = $user[1];
		
		if(password_verify($password, $password_db))
		{
			return true;
		}
		else
		{
			return false;
		}
	};
	
	public function getUserFromEmail($email)
	{
		$SQL = 'SELECT * FROM users WHERE email = ?';
		$results = $this->db->getrow($SQL, array($email));
		$user = $results;
		return $user;
	}
	
	public function getUserFromID($uID)
	{
		$SQL = 'SELECT * FROM users WHERE uID = ?';
		$results = $this->db->getrow($SQL, array($uID));
		$user = $results;
		return $user;
	}
}
?>