<?php

namespace TimeStamper;

include_once './TimeStamp/TimeStampArrayFactory.class.php';
include_once './XML/TimeStampXMLUtility.class.php';
include_once './XML/TimeStampXMLFactory.class.php';
include_once './TimeStamp/TimeStampUtility.php';
include_once 'TimeStamp.class.php';
include_once 'TimeStampPrimeNumbers.class.php';
include_once './Interfaces/ITimeStamper.interface.php';

?>

<h1>
    Loaded files...</br>
    Launching first test...</br></br>
</h1>

<?php

$timeStampArray = TimeStampArrayFactory::createTimeStampArray(1970);

$timeStampClass = new TimeStamp($timeStampArray);

    if ($timeStampClass->mainAction())
    {
?>
<h1>
    First test passed. Please find the results in TimeStamps.XML</br></br>
    Launching second test...
</h1>

<?php
    }
    else
    {
?>
<h1>
    First test failed. Please check TimeStamp.class.php</br></br>
</h1>

<?php
        exit;
    }

    $timeStampArray = TimeStampArrayFactory::createTimeStampArray(1970);

    $timeStampClass = new TimeStampPrimeNumbers($timeStampArray);

    if ($timeStampClass->mainAction())
    {
?>
<h1>
    Second test passed. Please find the results in TimeStampsPrimeNumbers.XML</br></br>
    Thank you and have a nice day.</br><br>
    David Preece
</h1>
<?php
    }
    else
    {
?>
<h1>
    Second test failed. Please check TimeStampPrimeNumbers.class.php</br></br>
</h1>
<?php
        exit;
    }