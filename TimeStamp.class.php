<?php

namespace TimeStamper;

include_once 'TimeStamp/TimeStampArrayFactory.class.php';
include_once 'XML/TimeStampXMLFactory.class.php';
include_once 'Interfaces/ITimeStamper.interface.php';
include_once 'XML/TimeStampXMLUtility.class.php';
include_once 'TimeStamp\TimeStampUtility.php';

class TimeStamp implements ITimeStamper {

	private $_formattedSimpleXML;

    function __construct(array $simpleXML)
    {
        $this->_formattedSimpleXML = TimeStampUtility::formatDateTimeArray($simpleXML);
    }

    /**
     * This is the main method of the TimeStamp class. It creates an XML with Time Stamps.
     *
     * @return bool
     */
    function mainAction()
	{
        try
        {
            $xmlTimeStamps = TimeStampXMLFactory::createXMLFromArray($this->_formattedSimpleXML);
            $prettyXML = TimeStampXMLUtility::formatXML($xmlTimeStamps);
            TimeStampXMLUtility::writeToFile($prettyXML, "TimeStamps.XML");
            return true;
        }
        catch (\Exception $e)
        {
            echo 'Exception catch while trying to run main method in __CLASS__ : ' . $e->getMessage() . "\n";
        }
        return false;
	}
} 