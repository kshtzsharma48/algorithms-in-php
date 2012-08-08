<?php

namespace Algorithm\Tests\Sort;

use Algorithm\Sort\InsertionSort;

class InsertionSortTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->subject = new InsertionSort();
    }
    
    public function testShouldSort()
    {
        $array = array(1,5,3,19,3,6,11);
        $this->subject->sort($array);
        $this->assertEquals($array, array(1,3,3,5,6,11,19));
    }
}