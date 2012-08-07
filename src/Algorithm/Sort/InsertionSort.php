<?php

namespace Algorithm\Sort;

/**
 * @see http://www.stoimen.com/blog/2012/02/13/computer-algorithms-insertion-sort/
 */
class InsertionSort
{
    public function sort(array &$array)
    {
        // loop through all items in the array
        for ($i = 1; $i < count($array); $i++) {

            // store current value in temp
            $temp = $array[$i];

            // store counter in temp
            $j = $i;

            // while temp counter is greater than or equal to 0,
            // and the previous value in the array is greater than temp
            while (($j >= 0) && ($array[$j-1] > $temp)) {

                // move the previous value forward one
                $array[$j] = $array[$j - 1];

                // decrement the temp counter
                $j--;
            }

            // move the current value backwards
            $array[$j] = $temp;
        }
    }
}