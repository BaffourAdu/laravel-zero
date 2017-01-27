<?php

namespace Tests;

abstract class TestCase extends \PHPUnit_Framework_TestCase
{
    use CreatesApplication;

    /**
     * The Illuminate application instance.
     *
     * @var \App\Console\Application
     */
    protected $app;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp()
    {
        $this->app = $this->createApplication();
    }
}
