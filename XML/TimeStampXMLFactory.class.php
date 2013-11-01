<?php

namespace TimeStamper;

class TimeStampXMLFactory {

    private function __construct()
    {
    }

    /**
     * Creates a SimpleXMLElement from the formatted array supplied
     * Use TimeStampUtility::formatDateTimeArray to format.
     *
     * @param $arrayToConvert
     * @return \SimpleXMLElement
     */
    static public function createXMLFromArray ($arrayToConvert)
    {
        $TimeStampXML = new \SimpleXMLElement('<timestamps></timestamps>');

        foreach($arrayToConvert as $timestamp => $key)
        {
            $value = explode ('/', $key);
            $timeStampChild = $TimeStampXML->addChild('timestamp');

            $timeStampChild->addAttribute('time', $value[0]);
            $timeStampChild->addAttribute('text', $value[1]);
        }

        return $TimeStampXML;
    }
}