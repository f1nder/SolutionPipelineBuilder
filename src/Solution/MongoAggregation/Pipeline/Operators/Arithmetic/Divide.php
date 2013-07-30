<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Arithmetic;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Divide extends Operator
{
    function getName()
    {
        return 'divide';
    }
}