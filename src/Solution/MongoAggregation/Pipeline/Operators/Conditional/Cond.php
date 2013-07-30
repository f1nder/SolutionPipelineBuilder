<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Conditional;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Cond extends Operator
{
    function getName()
    {
        return 'cond';
    }
}