<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Arithmetic;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Mod extends Operator
{
    function getName()
    {
        return 'mod';
    }
}