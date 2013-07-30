<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Comparison;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Cmp extends Operator
{
    function getName()
    {
        return 'cmp';
    }
}