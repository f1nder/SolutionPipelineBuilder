<?php

namespace Solution\MongoAggregation\Pipeline\Operators\String;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class ToUpper extends Operator
{
    function getName()
    {
        return 'toUpper';
    }
}