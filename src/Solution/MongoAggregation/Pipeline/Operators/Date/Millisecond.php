<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Date;


use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Millisecond extends Operator
{
    function getName()
    {
        return 'millisecond';
    }
}