<?php

include_once './TimeStamp/TimeStampArrayFactory.class.php';
include_once './TimeStamp/TimeStampUtility.php';
include_once './XML/TimeStampXMLFactory.class.php';
include_once './XML/TimeStampXMLUtility.class.php';

class TimeStampXMLFactoryTest extends PHPUnit_Framework_TestCase {

    public function testClassShouldReturnArray()
    {
        $inputArray = \TimeStamper\TimeStampArrayFactory::CreateTimeStampArray(1970);

        $this->assertNotEmpty($inputArray);

        $xmlString = \TimeStamper\TimeStampXMLFactory::CreateXMLFromArray(\TimeStamper\TimeStampUtility::formatDateTimeArray($inputArray));

        $this->assertNotEmpty($xmlString);
    }
}
 