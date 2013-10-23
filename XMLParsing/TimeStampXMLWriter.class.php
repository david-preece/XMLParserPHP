<?php
/**
 * Created by PhpStorm.
 * User: Dave
 * Date: 23/10/13
 * Time: 17:14
 */

class TimeStampXMLWriter {

    // this class needs to take an array and write it to a specified xml file.


    // Static class
    private function __construct()
    {
    }

    static public function WriteToFile($stringToWrite, $fileToWriteTo)
    {
        $handle = fopen($fileToWriteTo, "w");

        fwrite($handle, $stringToWrite);

        fclose($handle);
    }
}