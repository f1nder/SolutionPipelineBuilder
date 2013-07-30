<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Group;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Last extends Operator
{
    function getName()
    {
        return 'last';
    }
}