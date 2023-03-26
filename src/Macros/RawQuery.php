<?php

namespace Uteq\QueryBuilderMacros\Macros;

class RawQuery
{
    public function __invoke(): \Closure
    {
        return function () {
            return vsprintf(
                format: str_replace('?', '%s', $this->toSql()),
                values: collect($this->getBindings())
                    ->map(fn ($binding) => is_numeric($binding) ? $binding : "'{$binding}'")
                    ->toArray()
            );
        };
    }
}
