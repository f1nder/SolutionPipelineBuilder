<?php


namespace Solution\MongoAggregation\Pipeline\Operators\Boolean;


use Solution\MongoAggregation\Pipeline\Operators\Operator;

class AndX extends Operator
{
    function getName()
    {
        return 'and';
    }
}