<?php 
include_once ('../config.php');
class User{
	private $login;
    private $pwd;
	private $role;
    public $conf;	

	public function __construct($login,$pwd,$conn)
	{
		$this->login=$login;
		$this->pwd=$pwd;
		$c=new config();
		$this->conf=$c->getConnexion();
		
	}
	function getLog()
	{
		return $this->login;
	}
    function getPWD()
	{
		return $this->pwd;
		
	}
	 function getRole()
	{
		return $this->role;
		
	}

	public function Logedin($conf,$login,$pwd)
	{
		$req="select * from users where user_name='$login' and user_pass='$pwd'";
		$rep=$conf->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>