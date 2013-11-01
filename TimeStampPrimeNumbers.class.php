<?php

namespace TimeStamper;

include_once 'Interfaces/ITimeStamper.interface.php';
include_once 'TimeStamp/TimeStampUtility.php';
include_once 'XML/TimeStampXMLFactory.class.php';
include_once 'XML/TimeStampXMLUtility.class.php';

class TimeStampPrimeNumbers implements ITimeStamper
{
    private $_formattedSimpleXML;

    function __construct(array $simpleXML)
    {
        array_multisort($simpleXML, SORT_DESC);
        $this->_formattedSimpleXML = TimeStampUtility::formatDateTimeArray($simpleXML);
    }

    /**
     * Main method for TimeStampPrimeNumbers. Similar to TimeStamp, but this class checks for prime
     * numbers in the years, discarding any time stamps with a prime number as its year.
     *
     * @return bool
     */
    function mainAction()
    {
        try
        {
            $newStack = array();
            for ($i = 0; $i < count($this->_formattedSimpleXML); $i++)
            {
                $splitTimeStamp = explode ('/', $this->_formattedSimpleXML[$i]);
                $yearToTest = substr($splitTimeStamp[1], 0, 4);
                if(!$this->testPrimeNumber((int)$yearToTest))
                    array_push($newStack, $this->_formattedSimpleXML[$i]);
            }
            $this->_formattedSimpleXML = $newStack;
            unset ($newStack);

            $xmlTimeStamps = TimeStampXMLFactory::createXMLFromArray($this->_formattedSimpleXML);
            $prettyXML = TimeStampXMLUtility::formatXML($xmlTimeStamps);
            TimeStampXMLUtility::writeToFile($prettyXML, "TimeStampsPrimeNumbers.XML");

            return true;
        }
        catch (Exception $e)
        {
            echo 'Exception thrown while performing __METHOD__ in __CLASS__: ' . $e->getMessage();
        }
        return false;
    }

    /**
     * Tests the given number to check if it is a prime number.
     *
     * @param $numberToTest
     * @return bool
     */
    private function testPrimeNumber ($numberToTest)
    {

        for ($i = 2; $i < $numberToTest; $i++)
            if ($numberToTest % $i == 0 && $i != $numberToTest)
            {
                return false;
            }
        return true;
    }
} 