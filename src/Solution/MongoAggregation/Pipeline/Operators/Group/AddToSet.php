<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Group;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class AddToSet extends Operator
{
    function getName()
    {
        return 'addToSet';
    }
}