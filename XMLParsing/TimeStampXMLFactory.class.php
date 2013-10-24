<?php
/**
 * Created by PhpStorm.
 * User: Dave
 * Date: 23/10/13
 * Time: 17:41
 */

class TimeStampXMLFactory {


    // Static class
    private function __construct()
    {
    }

    static public function CreateXMLFromArray ($arrayToConvert)
    {
        $TimeStampXML = new SimpleXMLElement('<timestamps></timestamps>');

        foreach($arrayToConvert as $timestamp => $key)
        {
            $value = explode ('/', $key);
            $timeStampChild = $TimeStampXML->addChild('timestamp');

            $timeStampChild->addAttribute('time', $value[0]);
            $timeStampChild->addAttribute('text', $value[1]);
        }

        return $TimeStampXML->asXML();
    }
}