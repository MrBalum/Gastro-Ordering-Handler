<?php
require_once dirname(__DIR__) . '/model/TimeModel.php';
require_once dirname(__DIR__) . '/model/ReceiptModel.php';


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
        $this->connectDatabase();
    }

    /**
     * Handles the connection to the database. Also changes charset to UTF-8. Initialize the mysql object for further
     * usages.
     */
    private function connectDatabase()
    {
        $this->mysqliObject = new mysqli(self::HOST, self::USER_NAME, self::USER_PASSWORD, self::DATABASE_NAME);
        if (mysqli_connect_errno()) {
            echo('Can\'t reach database. The following error occurred: "' . mysqli_connect_errno() . ' : ' . mysqli_connect_error() . '"');
        }
        if (!$this->mysqliObject->set_charset("utf8")) {
            echo("Error loading character set utf8: %s\n" . $this->mysqliObject->errno);
        }
    }

    /**
     * Outputs all Drivers and frees afterward the result set.
     *
     *
     */
    public function getAllEmployees()
    {
        $query = "SELECT id, sur_name,first_name FROM Employee ";
        /* @var mysqli_result $result */
        $result = $this->mysqliObject->query($query);
        if ($result) {
            $return = $result->fetch_all();
        } else {
            throw new mysqli_sql_exception('Cant \' execute query:' . $query);
        }
        // Close the database connection
        $result->close();

    }

    /**
     * Return all choosable times
     */
    public function getAllTimes()
    {
        $query = " SELECT id, time, max_orders, locked FROM Time";
        $result = $this->mysqliObject->query($query);
        if ($result) {
            $return = $result->fetch_all();
            return $this->buildTimes($return);
        } else {
            throw new mysqli_sql_exception('Cant \' execute query:' . $query);
        }

    }

    /**
     * @param array $timesArray
     * @return array
     */
    private function buildTimes($timesArray)
    {
        $times = [];
        foreach ($timesArray as $timeArray) {
            $time = new TimeModel();
            $time->setId($timeArray[0]);
            $time->setMaxOrders($timeArray[2]);
            $time->setTime($timeArray[1]);
            $time->setLocked($timeArray[3]);
            $times[] = $time;
        }
        return $times;
    }

    public function closeDatabaseConnection()
    {
        //close database connection

        $this->mysqliObject->close();
    }

    /**
     * @param ReceiptModel $receipt
     */
    public function InsertReceipt($receipt)
    {

        $query = 'INSERT INTO Receipt (employee_id, time_id, invoice_number, customer_name, value_of_goods,canceled)
                  VALUES(' . $receipt->getEmployeeId() . ',' . $receipt->getTimeId() . ',"' . $receipt->getInvoiceNumber() .
                            '","' . $receipt->getCustomerName() . '",' . $receipt->getValueOfGoods() . ',"' . $receipt->getCanceled() . '")';
        echo $query;
        $this->mysqliObject->query($query);
        if(mysqli_connect_errno()){
            throw new mysqli_sql_exception('Receipt cannot be saved');
        }
    }


}

