<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Date;


use Solution\MongoAggregation\Pipeline\Operators\Operator;

class DayOfWeek extends Operator
{
    function getName()
    {
        return 'dayOfWeek';
    }
}