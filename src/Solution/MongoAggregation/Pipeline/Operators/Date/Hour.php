<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Date;


use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Hour extends Operator
{
    function getName()
    {
        return 'hour';
    }
}