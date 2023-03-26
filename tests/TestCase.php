<?php

namespace Uteq\QueryBuilderMacros\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Uteq\QueryBuilderMacros\QueryBuilderMacroServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            QueryBuilderMacroServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
