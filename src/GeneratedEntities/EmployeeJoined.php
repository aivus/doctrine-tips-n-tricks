<?php
require_once 'PersonJoined.php';


/**
 * Employee2
 */
class EmployeeJoined extends PersonJoined
{
    /**
     * @var string
     */
    private $test;


    /**
     * Set test
     *
     * @param string $test
     *
     * @return EmployeeJoined
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return string
     */
    public function getTest()
    {
        return $this->test;
    }
}
