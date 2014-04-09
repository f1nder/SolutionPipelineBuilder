<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Comparison;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class In extends Operator
{
    function getName()
    {
        return 'in';
    }
} 