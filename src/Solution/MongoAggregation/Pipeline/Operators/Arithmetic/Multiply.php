<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Arithmetic;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Multiply extends Operator
{
    function getName()
    {
        return 'multiply';
    }
}