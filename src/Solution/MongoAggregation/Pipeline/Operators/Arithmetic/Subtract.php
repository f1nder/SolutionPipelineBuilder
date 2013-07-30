<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Arithmetic;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Subtract extends Operator
{
    function getName()
    {
        return 'subtract';
    }
}