<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Comparison;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Nin extends Operator
{
    function getName()
    {
        return 'nin';
    }
} 