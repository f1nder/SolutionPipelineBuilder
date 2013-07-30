<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Comparison;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Lte extends Operator
{
    function getName()
    {
        return 'lte';
    }
}