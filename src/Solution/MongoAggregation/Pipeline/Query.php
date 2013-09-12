<?php

namespace Solution\MongoAggregation\Pipeline;

use Solution\MongoAggregation\Configuration;
use Solution\MongoAggregation\Pipeline\Operators\Operator;

class Query
{
    /** @var Configuration */
    protected $configuration;

    /** @var array */
    protected $stages;

    protected $cmd;

    function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        $this->cmd = $configuration->getMongoCmd();
    }

    /**
     * @param $name
     * @return Stage
     */
    public function addStage($name)
    {
        $stage = new Stage($this, $this->configuration->getMongoCmd());
        $this->stages[$name] = $stage;

        return $stage;
    }

    /**
     * @param $name
     * @return Stage
     */
    public function getStage($name)
    {
        return $this->stages[$name];
    }


    /**
     * @return array
     */
    public function getPipeline()
    {
        $_pipeline = [];

        foreach ($this->stages as $stage) {
            /** @var $stage  Stage */
            foreach ($stage as $step) {
                $_pipeline[] = [$step['name'] => $this->convertArgs($step['args'])];
            }
        }

        return $_pipeline;
    }

    /**
     * Recursive convert args
     *
     * @todo refactor
     * @param $step
     * @return array|string
     */
    protected function convertArgs($step)
    {
        if ($step instanceof Operator) {
            $arguments = $step->getArguments();
        } else {
            $arguments = $step;
        }

        if (is_array($arguments)) {
            $values = [];
            foreach ($arguments as $key => $args) {
                if ($args instanceof Operator) {
                    if (is_string($key)) {
                        $values[$key] = [$this->cmd.$args->getOperatorName() => $this->convertArgs($args)];
                    } else {
                        $values[] = [$this->cmd.$args->getOperatorName() => $this->convertArgs($args)];
                    }
                } else {
                    if (is_string($key)) {
                        $values[$key] = $this->convertArgs($args);
                    } else {
                        $values[] = $args;
                    }
                }
            }

            return $values;

        } elseif ($arguments instanceof Operator) {
            return [$this->cmd.$arguments->getOperatorName() => $this->convertArgs($arguments)];
        } else {
            return $arguments;
        }
    }
}