<?php

namespace Uteq\QueryBuilderMacros\Macros;

use Illuminate\Database\Query\Builder;

class RayQuery
{
    public function __invoke(): \Closure
    {
        return function () {
            /** @var Builder $this */
            ray($this->rawQuery());
        };
    }
}
