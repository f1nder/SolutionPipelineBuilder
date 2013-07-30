<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Date;


use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Second extends Operator
{
    function getName()
    {
        return 'second';
    }
}