<?php

namespace Uteq\QueryBuilderMacros\Macros;

class DumpQuery
{
    public function __invoke(): \Closure
    {
        return fn () => dump($this->rawQuery());
    }
}
