<?php

namespace Solution\MongoAggregation\Pipeline\Operators\String;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class ToLower extends Operator
{
    function getName()
    {
        return 'toLower';
    }
}