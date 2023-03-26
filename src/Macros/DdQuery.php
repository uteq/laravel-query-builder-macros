<?php

namespace Uteq\QueryBuilderMacros\Macros;

class DdQuery
{
    public function __invoke(): \Closure
    {
        return fn () => dd($this->rawQuery());
    }
}
