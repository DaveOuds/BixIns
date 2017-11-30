<?php
class Claim{
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
     * Pushes claimform data to the database
     *
     * @return void
     */
	public function submitClaim($name, $lastName, $address, $phoneNr, $ic, $policyNr){
		$sql = "INSERT INTO claims (FirstName, LastName, Address, PhoneNumber, TypeOfClaim, InsuranceCompany, PolicyNumber)
				VALUES ($name, $lastName, $address, $phoneNr, $ic, $policyNr)";
				
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
	
	listClaims(){
		
	}
}
?>