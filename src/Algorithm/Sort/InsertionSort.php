<?php

namespace Algorithm\Sort;

/**
 * @see http://www.stoimen.com/blog/2012/02/13/computer-algorithms-insertion-sort/
 * @see http://bit.ly/bvlfR1 MIT course containing insertion sort
 */
class InsertionSort
{
    /**
     * 8 2 4 9 3 6 - start on second position, 2 moves left one
     * 2 8 4 9 3 6 - third position, 4 moves left one
     * 2 4 8 9 3 6 - fourth position, 9 does not move
     * 2 4 8 9 3 6 - fifth position, 3 moves left four
     * 2 3 4 8 9 6 - sixth position, 6 moves left three
     * 2 3 4 6 8 9 - done
     */
    public function sort(array &$array)
    {
        for ($i = 1; $i < count($array); $i++) {
            $current = $array[$i];
            $j = $i;

            while (($j >= 0) && ($array[$j - 1] > $current)) {
                $array[$j] = $array[$j - 1];
                $j--;
            }
            $array[$j] = $current;
        }
    }
}