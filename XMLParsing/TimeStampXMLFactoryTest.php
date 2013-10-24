<?php
/**
 * Created by PhpStorm.
 * User: Dave&Zita
 * Date: 24/10/13
 * Time: 13:11
 */
include '../TimeStampFactory/TimeStampFactory.class.php';
include './TimeStampXMLFactory.class.php';
include './TimeStampXMLWriter.class.php';

class TimeStampXMLFactoryTest extends PHPUnit_Framework_TestCase {

    public function testClassShouldReturnArray()
    {
        $inputArray = TimeStampFactory::CreateTimeStampArray(1970);

        $this->assertNotEmpty($inputArray);

        $xmlString = TimeStampXMLFactory::CreateXMLFromArray($inputArray);

        $this->assertNotEmpty($xmlString);
        TimeStampXMLWriter::WriteToFile($xmlString, './xmltester.txt');
    }
}
 