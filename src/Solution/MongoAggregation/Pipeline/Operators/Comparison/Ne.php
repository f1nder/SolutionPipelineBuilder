<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Comparison;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Ne extends Operator
{
    function getName()
    {
        return 'ne';
    }
}