<?php
/**
 * Created by PhpStorm.
 * User: Dave
 * Date: 23/10/13
 * Time: 14:56
 */

class TimeStampGenerator {

    //Static class
    private function __construct()
    {
    }

    // TODO add type checking to class!!!!
    // This class returns an array of formatted DateTime classes. Format output is 'U Y-m-d H:i:s' or Epoch Year-Month-Day Hour:Minutes:Seconds
    static public function CreateTimeStampArray ($startYear = 1970)
    {
        // Retrieve the current year for calculations later on.
        $currentYear = ((int)(new DateTime())->format('Y'));

        // Calculate the number of years to loop through.
        $yearsToCountThrough = $currentYear - $startYear;

        // Create a stack to use in the for loop
        $stackToReturn = array();

        for ($i = 0; $i <= $yearsToCountThrough; $i++)
        {
            // Return new DateTime for each year on 30/06 at 1pm PST timezone.
            $dateTimeToAdd = new DateTime(($startYear + $i) . "-06-30 13:00:00", new DateTimeZone('PST'));

            // Format the DateTime for easy use in the XML file.
            // TODO this should be completed by the function that called this one. Should just return the DateTime array
            // $dateTimeToAdd = $dateTimeToAdd->format('U/Y-m-d/H:i:s');

            // Add the DateTime to the stack
            array_push ($stackToReturn, $dateTimeToAdd);
        }

        // Return the completed DateTime stack
        return $stackToReturn;
    }
} 