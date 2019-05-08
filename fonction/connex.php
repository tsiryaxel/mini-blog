<?php

// include("config.php");

class DB
{

    protected $conn = null;

    public function Open()
    {
		
		// Configuration du base de donner
	
		$config['host'] = "mysql:dbname=blog; host=localhost";
		$config['user'] = "root" ;
		$config['pass'] = "root" ;
		
        try {
            $options  = array(PDO::ATTR_ERRMODE =>      PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            );
            $this->conn = new PDO( $config['host'] , $config['user'] , $config['pass'] , $options );
            return $this->conn;

        } catch (PDOException $e) {
            echo 'Connection error: ' . $e->getMessage();
        }
    }

    public function Close()
    {
        $this->conn = null;
    }
}

?>