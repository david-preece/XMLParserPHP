<?php

namespace TimeStamper;

class TimeStampUtility {

    private function __construct()
    {
    }

    /**
     * Formats the given array of DateTime into the format "U/Y-m-d H:i:s"
     * Used in TimeStampXMLFactory to parse into XML.
     *
     * @param Array|\DateTime $arrayToFormat Array of DateTime to format.
     * @return \DateTime Returns the formatted DateTime array.
     */
    static public function formatDateTimeArray (array $arrayToFormat)
    {
        foreach ($arrayToFormat as &$value)
        {
            $value = date_format($value, 'U/Y-m-d H:i:s');
        }

        return $arrayToFormat;
    }
}