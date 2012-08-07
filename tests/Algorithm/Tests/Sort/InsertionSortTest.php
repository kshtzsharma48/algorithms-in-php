<?php

namespace Algorithm\Tests\Sort;

use Algorithm\Sort\InsertionSort;

class InsertionSortTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->subject = new InsertionSort();
    }

    /**
     * @todo add timing mechanism
     */
    public function testShouldSort()
    {
        $array = array(1,5,3,19,3,6,11);
        
        // copy array and use PHP to sort
        $sorted = $array;
        sort($sorted);

        // sort the array using the subject
        $this->subject->sort($array);

        $this->assertEquals($array, $sorted);
    }
}