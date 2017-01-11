<?php

namespace TheUniproGroup\Tests;

use TheUniproGroup\HelloWorld;

class HelloWorldTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_be_creatable()
    {
        new HelloWorld();
    }
}
