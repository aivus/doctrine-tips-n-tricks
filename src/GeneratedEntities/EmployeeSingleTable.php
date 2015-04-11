<?php
require_once 'PersonSingleTable.php';


/**
 * Employee
 */
class EmployeeSingleTable extends PersonSingleTable
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
     * @return EmployeeSingleTable
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
