<?php

namespace Solution\MongoAggregation\Pipeline\Operators;

use Solution\MongoAggregation\Pipeline\Operators\OperatorInterface;

abstract class Operator implements OperatorInterface
{
    protected $arguments;

    function __construct($arguments)
    {
        $this->arguments = $arguments;
    }

    /**
     * @return string
     */
    public function getOperatorName()
    {
        return $this->getName();
    }

    /**
     * @return string
     */
    public function getArguments()
    {
        if(is_string($this->arguments)) {
            return $this->arguments;
        }
        return $this->arguments;
    }

    /**
     * @return mixed
     */
    abstract function getName();
}