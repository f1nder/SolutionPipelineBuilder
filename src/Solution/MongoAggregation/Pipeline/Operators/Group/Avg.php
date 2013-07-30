<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Group;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Avg extends Operator
{
    function getName()
    {
        return 'avg';
    }
}