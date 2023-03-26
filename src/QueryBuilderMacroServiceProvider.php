<?php

namespace Uteq\QueryBuilderMacros;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\ServiceProvider;

class QueryBuilderMacroServiceProvider extends ServiceProvider
{
    public function register()
    {
        collect($this->macros())
            // Don't register macros that already exist
            ->reject(fn ($class, $macro) => Builder::hasMacro($macro))
            // Register the macros
            ->each(fn ($class, $macro) => Builder::macro($macro, app($class)()));
    }

    private function macros(): array
    {
        return [
            'rawQuery' => Macros\RawQuery::class,
            'ddQuery' => Macros\DdQuery::class,
            'dumpQuery' => Macros\DumpQuery::class,
            'rayQuery' => Macros\RayQuery::class,
        ];
    }
}
