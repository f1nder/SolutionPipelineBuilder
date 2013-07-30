<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Group;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Sum extends Operator
{
    function getName()
    {
        return 'sum';
    }
}