<?php

include_once './TimeStamp/TimeStampArrayFactory.class.php';

class TimeStampArrayFactoryTest extends PHPUnit_Framework_TestCase {

    public function testShouldReturnArray()
    {
        $actual = \TimeStamper\TimeStampArrayFactory::createTimeStampArray(1970);

        $this->assertNotEmpty($actual);
    }
}
 