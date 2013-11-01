<?php

namespace TimeStamper;

class TimeStampArrayFactory {

    //Static class
    private function __construct()
    {
    }

    /**
     * Returns an array of DateTimes from the given year or from the default of 1970.
     *
     * @param int $startYear The year to start with when returning the DateTime Array.
     * @throws \Exception Throws exception if $startYear is not an integer.
     * @return array Returns an array containing the DateTimes from the startYear.
     */
    static public function createTimeStampArray ($startYear = 1970)
    {
        if (!is_int($startYear))
        {
            throw new \Exception('$startYear must be an integer.');
        }

        $currentYear = ((int)(new \DateTime())->format('Y'));

        $yearsToCountThrough = $currentYear - $startYear;

        $stackToReturn = array();

        for ($i = 0; $i <= $yearsToCountThrough; $i++)
        {
            $dateTimeToAdd = new \DateTime(($startYear + $i) . "-06-30 13:00:00", new \DateTimeZone('PST'));

            array_push ($stackToReturn, $dateTimeToAdd);
        }

        return $stackToReturn;
    }
} 