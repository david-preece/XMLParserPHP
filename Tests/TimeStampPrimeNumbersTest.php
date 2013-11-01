<?php
include_once '../TimeStamp/TimeStampArrayFactory.class.php';
include_once '../TimeStampPrimeNumbers.class.php';

class TimeStampPrimeNumbersTest extends PHPUnit_Framework_TestCase {

    public function testClassShouldExist()
    {
        $testClass = new \TimeStamper\TimeStampPrimeNumbers(\TimeStamper\TimeStampArrayFactory::createTimeStampArray(1970));

        $this->assertNotEmpty($testClass, 'Assert failed, class should exist: ');
    }

    public function testShouldWriteToFile()
    {
        $testClass = new \TimeStamper\TimeStampPrimeNumbers(\TimeStamper\TimeStampArrayFactory::createTimeStampArray(1970));

        $actual = $testClass->mainAction();

        $this->assertTrue($actual, 'Assert failed');
    }
}
 