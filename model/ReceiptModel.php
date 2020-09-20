<?php
/**
 * Created by PhpStorm.
 * User: vbalum
 * Date: 20.09.2020
 * Time: 14:32
 */

class ReceiptModel
{
    /**
     * Receipt id.
     *
     * @var integer
     */
    protected $id;
    /**
     * Employee id.
     *
     * @var integer
     */
    protected $employee_id;

    /**
     * Id of the the assigned time.
     *
     * @var integer
     */
    protected $time_id;

    /**
     * Alphanumeric string that identifies invoice from extern till system
     *
     * @var string
     */
    protected $invoiceNumber;

    /**
     * Customer Name
     *
     * @var string
     */
    protected $customerName;

    /**
     * Value of goods.
     *
     * @var float
     */
    protected $valueOfGoods;

    /**
     * Flag that marks the receipt as canceled or not.
     *
     * @var string
     */
    protected $canceled;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ReceiptModel
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getEmployeeId()
    {
        return $this->employee_id;
    }

    /**
     * @param int $employee_id
     * @return ReceiptModel
     */
    public function setEmployeeId($employee_id)
    {
        $this->employee_id = $employee_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimeId()
    {
        return $this->time_id;
    }

    /**
     * @param int $time_id
     * @return ReceiptModel
     */
    public function setTimeId($time_id)
    {
        $this->time_id = $time_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     * @return ReceiptModel
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param string $customerName
     * @return ReceiptModel
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
        return $this;
    }

    /**
     * @return float
     */
    public function getValueOfGoods()
    {
        return $this->valueOfGoods;
    }

    /**
     * @param float $valueOfGoods
     * @return ReceiptModel
     */
    public function setValueOfGoods($valueOfGoods)
    {
        $this->valueOfGoods = $valueOfGoods;
        return $this;
    }

    /**
     * @return string
     */
    public function getCanceled()
    {
        return $this->canceled;
    }

    /**
     * @param string $canceled
     * @return ReceiptModel
     */
    public function setCanceled($canceled)
    {
        $this->canceled = $canceled;
        return $this;
    }


}