<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Date;


use Solution\MongoAggregation\Pipeline\Operators\Operator;

class DayOfMonth extends Operator
{
    function getName()
    {
        return 'dayOfMonth';
    }
}