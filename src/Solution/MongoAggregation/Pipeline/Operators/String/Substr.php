<?php

namespace Solution\MongoAggregation\Pipeline\Operators\String;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Substr extends Operator
{
    function getName()
    {
        return 'substr';
    }
}