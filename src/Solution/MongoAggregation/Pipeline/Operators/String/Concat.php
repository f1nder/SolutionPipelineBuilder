<?php

namespace Solution\MongoAggregation\Pipeline\Operators\String;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Concat extends Operator
{
    function getName()
    {
        return 'concat';
    }
}