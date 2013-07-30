<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Comparison;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Lt extends Operator
{
    function getName()
    {
        return 'lt';
    }
}