<?php
class SiteUsers
{
	/**
     * The database object
     *
     * @var object
     */
	private $_db;
	
	/**
     * Checks for a database object and creates one if none is found
     *
     * @param object $db
     * @return void
     */
	public function __construct($db=NULL)
    {
		$dsn = "mysql:host=localhost:3306 ;dbname=bixins";
		$this->_db = new PDO($dsn, "root", "bixinstest");
    }
	
	/**
     * Log in function
     *
     * @return boolean
     */
	public function createAccount($user,$pass)
	{
		$sql = "INSERT INTO users (Username, Password)
                    VALUES ($user, $pass)";
		try
        {
            $stmt = $this->_db->prepare($sql);
            $stmt->bindParam(':user', $_POST['username'], PDO::PARAM_STR);
            $stmt->bindParam(':pass', $_POST['password'], PDO::PARAM_STR);
            $stmt->execute();
			return $stmt;
        }
        catch(PDOException $e)
        {
            return FALSE;
        }
	}
	
	public function logInAccount(){
		 $sql = "SELECT Username
                FROM users
                WHERE Username=:user
                AND Password=MD5(:pass)
                LIMIT 1";
		 
		$stmt = $this->_db->prepare($sql);
		$stmt->bindParam(':user', $_POST['username'], PDO::PARAM_STR);
		$stmt->bindParam(':pass', $_POST['password'], PDO::PARAM_STR);
		$stmt->execute();		
	}
	
	public function changeEmail(){
		
	}
	
	public function changePassword(){
		
	}
	
	public function forgotPassword(){
		
	}	
}
?>