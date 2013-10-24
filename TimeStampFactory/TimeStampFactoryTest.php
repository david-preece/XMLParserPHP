<?php
/**
 * Created by PhpStorm.
 * User: Dave
 * Date: 23/10/13
 * Time: 22:42
 */
include './TimeStampFactory.class.php';

class TimeStampFactoryTest extends PHPUnit_Framework_TestCase {

    public function testShouldReturnArray()
    {
        $rw  = TimeStampFactory::CreateTimeStampArray();
        $this->assertNotEmpty($rw);
    }
}
 