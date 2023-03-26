<?php

namespace Uteq\QueryBuilderMacros\Macros;

use Illuminate\Database\Query\Builder;

class RawQuery
{
    public function __invoke(): \Closure
    {
        return function () {
            /** @var Builder $this */
            return vsprintf(
                format: str_replace('?', '%s', $this->toSql()),
                values: collect($this->getBindings())
                    ->map(fn ($binding) => is_numeric($binding) ? $binding : "'{$binding}'")
                    ->toArray()
            );
        };
    }
}
