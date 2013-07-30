<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Group;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Min extends Operator
{
    function getName()
    {
        return 'min';
    }
}