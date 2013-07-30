<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Comparison;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Gte extends Operator
{
    function getName()
    {
        return 'gte';
    }
}