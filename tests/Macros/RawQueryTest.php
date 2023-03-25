<?php

use Illuminate\Database\Query\Builder;
use Uteq\QueryBuilderMacros\Tests\BaseModel as Model;

it('provides a raw query macro', function () {
    expect(Builder::hasMacro('rawQuery'))->toBeTrue();
});

it('can return a raw query', function () {
    $query = Model::query()
        ->where('id', 1)
        ->getQuery()
        ->rawQuery();

    expect($query)->toBe('select * from "models" where "id" = 1');
});
