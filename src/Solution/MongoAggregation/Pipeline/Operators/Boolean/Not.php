<?php


namespace Solution\MongoAggregation\Pipeline\Operators\Boolean;


use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Not extends Operator
{
    function getName()
    {
        return 'not';
    }
}