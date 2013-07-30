<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Group;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Max extends Operator
{
    function getName()
    {
        return 'max';
    }
}