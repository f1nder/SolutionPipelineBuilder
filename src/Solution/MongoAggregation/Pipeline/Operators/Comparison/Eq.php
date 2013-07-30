<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Comparison;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Eq extends Operator
{
    function getName()
    {
        return 'eq';
    }
}