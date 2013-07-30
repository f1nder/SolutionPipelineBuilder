<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Date;


use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Minute extends Operator
{
    function getName()
    {
        return 'minute';
    }
}