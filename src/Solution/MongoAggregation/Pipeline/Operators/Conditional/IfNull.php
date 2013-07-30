<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Conditional;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class IfNull extends Operator
{
    function getName()
    {
        return 'ifNull';
    }
}