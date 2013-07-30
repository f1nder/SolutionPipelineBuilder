<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Date;


use Solution\MongoAggregation\Pipeline\Operators\Operator;

class DayOfYear extends Operator
{
    function getName()
    {
        return 'dayOfYear';
    }
}