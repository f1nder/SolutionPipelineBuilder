<?php

namespace Solution\MongoAggregation\Pipeline\Operators\Date;


use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Year extends Operator
{
    function getName()
    {
        return 'year';
    }
}