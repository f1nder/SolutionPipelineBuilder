<?php


namespace Solution\MongoAggregation\Pipeline\Operators\Boolean;


use Solution\MongoAggregation\Pipeline\Operators\Operator;

class OrX extends Operator
{
    function getName()
    {
        return 'or';
    }
}