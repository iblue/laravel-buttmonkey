<?php

namespace Buttmonkey\Stubs\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Buttmonkey\Stubs\StubsServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            StubsServiceProvider::class,
        ];
    }
}
