<?php
/**
 * Created by PhpStorm.
 * User: vbalum
 * Date: 20.09.2020
 * Time: 15:18
 */

class TimeModel
{
    /**
     * Time id.
     *
     * @var integer
     */
    protected $id;
    /**
     * Choseable time.
     *
     * @var string
     */
    protected $time;
    /**
     * Maximal size an orders to assign.
     *
     * @var integer
     */
    protected $maxOrders;

    /**
     * Flag to identify if this time is locked or not.
     *
     * @var string
     */
    protected $locked;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return TimeModel
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param string $time
     * @return TimeModel
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxOrders()
    {
        return $this->maxOrders;
    }

    /**
     * @param int $maxOrders
     * @return TimeModel
     */
    public function setMaxOrders($maxOrders)
    {
        $this->maxOrders = $maxOrders;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * @param string $locked
     * @return TimeModel
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;
        return $this;
    }


}