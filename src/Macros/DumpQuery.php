<?php

namespace Uteq\QueryBuilderMacros\Macros;

use Illuminate\Database\Query\Builder;

class DumpQuery
{
    public function __invoke(): \Closure
    {
        return function () {
            /** @var Builder $this */
            dump($this->rawQuery());
        };
    }
}
