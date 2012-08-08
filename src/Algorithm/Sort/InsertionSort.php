<?php

namespace Algorithm\Sort;

/**
 * @see http://www.stoimen.com/blog/2012/02/13/computer-algorithms-insertion-sort/
 * @see http://bit.ly/bvlfR1 MIT course containing insertion sort
 */
class InsertionSort
{
    /**
     * manually sort an array [8, 2, 4, 9, 3, 6]
     *
     * 8 2 4 9 3 6 - start on second position, 2 moves left one
     * 2 8 4 9 3 6 - third position, 4 moves left one
     * 2 4 8 9 3 6 - fourth position, 9 does not move
     * 2 4 8 9 3 6 - fifth position, 3 moves left four
     * 2 3 4 8 9 6 - sixth position, 6 moves left three
     * 2 3 4 6 8 9 - done
     *
     * Running time:
     *  - depends on the input (e.g. already sorted, worst case reverse sorted)
     *  - depends on the input size (6 elements vs 60000 elements)
     *  - want upper bounds on the running time (e.g. won't run longer than 3 seconds)
     *  - upper bounds represents a gaurantee to the user
     *
     * Kinds of analysis:
     *  - worst case (most popular)
     *      - T(n) = max time of any input of size n
     *  - average case
     *      - T(n) = expected time over all inputs of size n
     *      - this requires an assumption of the statistical distribution of inputs
     *  - best case
     *      - this is bogus because you can make slow algorithms look fast (cheating)
     *      - a slow algorithm can look fast on some inputs (cheating)
     */
    public function sort(array &$array)
    {
        // loop through all items in the array
        for ($i = 1; $i < count($array); $i++) {

            // store current value in temp
            $current = $array[$i];

            // store counter in temp
            $j = $i;

            // while temp counter is greater than or equal to 0,
            // and the previous value in the array is greater than temp
            while (($j >= 0) && ($array[$j-1] > $current)) {

                // move the previous value forward one
                $array[$j] = $array[$j - 1];

                // decrement the temp counter
                $j--;
            }

            // move the current value backwards
            $array[$j] = $current;
        }
    }
}