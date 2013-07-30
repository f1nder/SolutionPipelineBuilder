<?php

namespace Solution\MongoAggregation\Pipeline\Operators\String;

use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Strcasecmp extends Operator
{
    function getName()
    {
        return 'strcasecmp';
    }
}