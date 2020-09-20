<?php
/**
 * Created by PhpStorm.
 * User: vbalum
 * Date: 20.09.2020
 * Time: 13:59
 */

class EmployeeModel
{

    /**
     * Employee id
     *
     * @var integer
     */
    protected $id;

    /**
     * Surname of employee
     *
     * @var string
     */
    protected $surName;

    /**
     * Firstname of employee.
     *
     * @var string
     */
    protected $firstName;

    /**
     * Returns employee Id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets employee id.
     *
     * @param integer $id
     * @return EmployeeModel
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Returns surname of employee.
     *
     * @return string
     */
    public function getSurName()
    {
        return $this->surName;
    }

    /**
     * Sets surname of employee.
     *
     * @param string $surName
     * @return EmployeeModel
     */
    public function setSurName($surName)
    {
        $this->surName = $surName;
        return $this;
    }

    /**
     * Returns first name of employee.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets first name of employee.
     *
     * @param string $firstName
     * @return EmployeeModel
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }


}