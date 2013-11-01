<?php

namespace TimeStamper;

/**
 * Class TimeStampXMLUtility
 * Utility static class for XML
 * @package TimeStamper
 */
class TimeStampXMLUtility {

    private function __construct()
    {
    }

    /**
     * Write the given string to the filename provided
     *
     * @param $stringToWrite String to write to the file
     * @param $fileToWriteTo File name of the file to write to. Will overwrite.
     */
    static public function writeToFile($stringToWrite, $fileToWriteTo)
    {
        try
        {
            $handle = fopen($fileToWriteTo, "w");

            fwrite($handle, $stringToWrite);

            fclose($handle);
        }
        catch (\Exception $e)
        {
            echo 'Exception while trying to write to file: ' . $e->getMessage() . "\n";
        }
    }

    /**
     * Formats a SimpleXMLElement into more human readable code.
     * (wrapping in file)
     *
     * @param \SimpleXMLElement $simpleXMLObject
     * @return string The formatted XML as a String.
     */
    static public function formatXML(\SimpleXMLElement &$simpleXMLObject)
    {
        if(!is_object($simpleXMLObject))
            return "";

        try
        {
            $dom = new \DOMDocument('1.0');
            $dom->preserveWhiteSpace = false;
            $dom->formatOutput = true;
            $dom->loadXML($simpleXMLObject->asXML());

            return $dom->saveXML();
        }
        catch (\Exception $e)
        {
            echo 'Exception while trying to convert SimpleXML into DOM: ' . $e->getMessage() . "\n";
        }
        return "";
    }

}