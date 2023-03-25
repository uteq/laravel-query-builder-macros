<?php

namespace Uteq\QueryBuilderMacros\Macros;

class RayQuery
{
    public function __invoke(): \Closure
    {
        return fn() => ray($this->rawQuery());
    }
}
