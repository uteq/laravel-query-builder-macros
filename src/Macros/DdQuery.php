<?php

namespace Uteq\QueryBuilderMacros\Macros;

use Illuminate\Database\Query\Builder;

class DdQuery
{
    public function __invoke(): \Closure
    {
        return function () {
            /** @var Builder $this */
            dd($this->rawQuery());
        };
    }
}
