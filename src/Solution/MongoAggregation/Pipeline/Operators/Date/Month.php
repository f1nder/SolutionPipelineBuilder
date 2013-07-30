<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Date;


use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Month extends Operator
{
    function getName()
    {
        return 'month';
    }
}