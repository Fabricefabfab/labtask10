<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("us-cdbr-east-06.cleardb.net", "bc2fdbe3d9fb92", "3f1ab0a9", "heroku_0d961f286c98afb");
		return $this->con;
	}
}

?>
