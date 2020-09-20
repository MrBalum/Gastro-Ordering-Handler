<?php

class GastroOrderingHandlerDbConnector
{
    /**
     * Constant for local host.
     */
    const HOST = 'localhost';

    /**
     * Constant for the user name in MySQL.
     */
    const USER_NAME = 'root';

    /**
     * Constant for the user password in MySQL.
     */
    const USER_PASSWORD = '';

    /**
     * Constant for the database name in MySQL.
     */
    const DATABASE_NAME = 'gastro-ordering-handler';

    /**
     * Mysqli object
     * @var mysqli
     */
    private $mysqliObject;

    /**
     * GastroOrderingHandlerDbConnector constructor.
     */
    public function __construct()
    {
        //connecting to database
        $this->connectDatabase();
        //get all drivers
        $this->getAllDrivers();
        //close database connection
        $this->mysqliObject->close();
    }

    /**
     * Handles the connection to the database. Also changes charset to UTF-8. Initialize the mysql object for further
     * usages.
     */
    private function connectDatabase()
    {
        $this->mysqliObject = new mysqli(self::HOST, self::USER_NAME, self::USER_PASSWORD,self::DATABASE_NAME);
        if (mysqli_connect_errno()) {
            echo('Can\'t reach database. The following error occurred: "' . mysqli_connect_errno() . ' : ' . mysqli_connect_error() . '"');
        }


        if (!$this->mysqliObject->set_charset("utf8")) {
            echo("Error loading character set utf8: %s\n" . $this->mysqliObject->errno);
        }


    }

    /**
     * Outputs all Drivers and frees afterward the result set
     */
    public function getAllDrivers()
    {
        $query="SELECT id, sur_name,first_name FROM Employee ";
        /* @var mysqli_result $result */
        $result = $this->mysqliObject->query($query);
        if ($result) {
            $return = $result->fetch_all();
            echo "<pre>";
            var_dump($return);
            echo "</pre>";
        } else {
            die('Cant \' execute query:'.$query);


        }
        // Close the database connection
        $result->close();

    }






}

