<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Arithmetic;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Add extends Operator
{
    function getName()
    {
        return 'add';
    }
}