<?php

include_once './XML/TimeStampXMLUtility.class.php';
include_once './TimeStamp/TimeStampArrayFactory.class.php';
include_once './TimeStamp.class.php';
include_once './XML/TimeStampXMLFactory.class.php';
include_once './TimeStamp/TimeStampUtility.php';

class TimeStampXMLUtilityTest extends PHPUnit_Framework_TestCase {

    public function testShouldWriteToFile()
    {
        \TimeStamper\TimeStampXMLUtility::writeToFile("Test String", "test_file.txt");
        $this->assertFileExists("test_file.txt");
    }

    public function testShouldParseXML()
    {
        $arrayToConvert = \TimeStamper\TimeStampArrayFactory::createTimeStampArray(1970);
        $formattedArray = \TimeStamper\TimeStampUtility::formatDateTimeArray($arrayToConvert);
        $xmlFromFormattedArray = \TimeStamper\TimeStampXMLFactory::createXMLFromArray($formattedArray);
        $expected = \TimeStamper\TimeStampXMLUtility::formatXML($xmlFromFormattedArray);

        $this->assertNotEquals($expected, "", 'Assert failed, XML formatting failed.');
    }
}
 