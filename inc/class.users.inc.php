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
		$sql = "INSERT INTO users (ID,Username, Password)
                    VALUES (0, $user, $pass)";
		try
        {
            $stmt = $this->_db->prepare($sql);
            $stmt->execute();
			return $stmt;
        }
        catch(PDOException $e)
        {
            return FALSE;
        }
	}
	
	/**
     * Function to check if log in credentials are valid
     *
     * @return boolean
     */
	public function logInAccount($user,$passw){
		 $sql = "SELECT Username
                FROM users
                WHERE Username=:user
                AND Password=MD5(:pass)
                LIMIT 1";
		try
        {
            $stmt = $this->_db->prepare($sql);
            $stmt->execute();
            if($stmt->rowCount()==1)
            {
                $_SESSION['Username'] = htmlentities($_POST['username'], ENT_QUOTES);
                $_SESSION['LoggedIn'] = 1;
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
        catch(PDOException $e)
        {
            return FALSE;
        }	
	}
}
?>