<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Date;


use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Week extends Operator
{
    function getName()
    {
        return 'week';
    }
}