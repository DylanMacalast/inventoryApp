<?php
use PHPUnit\Framework\TestCase;
class SampleTest extends TestCase
{
    // Testing pushAndPop array methods
    public function testPushAndPop()
    {
        $stack = [];
        // testing that the array value is same as 0
        $this->assertSame(0, count($stack));

        // Testing that the array_push function works
        array_push($stack,'foo');
        // testing that foo has been added to the array
        $this->assertSame('foo', $stack[count($stack) -1]);
        // testing that there is one element in array
        $this->assertSame(1, count($stack));

        // Testing the array_pop function removes element from array
        $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));

    }

}