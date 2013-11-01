<?php

include_once './TimeStamp.class.php';

class TimeStampTest extends PHPUnit_Framework_TestCase {

    public function testClassShouldExist()
    {
        $expectedClass = new \TimeStamper\TimeStamp(\TimeStamper\TimeStampArrayFactory::createTimeStampArray(1970));

        $this->assertNotEmpty($expectedClass, 'Class does not exist.');
    }

    public function testShouldRunMainMethod()
    {
        $timeStampClass = new \TimeStamper\TimeStamp(\TimeStamper\TimeStampArrayFactory::createTimeStampArray(1970));

        $actual = $timeStampClass->mainAction();

        $this->assertTrue($actual);
    }
}
 