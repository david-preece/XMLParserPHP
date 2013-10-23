Welcome to David Preece's Secret Sales Remote Coding Test<br>
Please select one of the following links to run the program.<br>

<?php

include './TimeStampFactory/TimeStampFactory.class.php';
include './XMLParsing/TimeStampXMLWriter.class.php';
include './XMLParsing/TimeStampXMLFactory.class.php';

$va = TimeStampGenerator::CreateTimeStampArray(1970);
foreach ($va as &$va2)
{
    $va2 = date_format($va2, 'U/Y-m-d H:i:s');
}
unset ($va2);
//var_dump($va);
//var_dump(TimeStampGenerator::CreateTimeStampArray(1970));

TimeStampXMLFactory::CreateXMLFromArray($va);
