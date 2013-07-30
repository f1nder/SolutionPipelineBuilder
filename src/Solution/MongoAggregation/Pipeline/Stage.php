<?php

namespace Solution\MongoAggregation\Pipeline;

class Stage implements \IteratorAggregate
{
    protected $query;

    /** @var array */
    protected $steps = [];

    protected $cmd;

    function __construct(Query $query, $cmd)
    {
        $this->query = $query;
        $this->cmd = $cmd;
    }


    public function getQuery()
    {
        return $this->query;
    }

    public function group(array $args)
    {
        $this->addStep('group', $args);

        return $this;
    }

    public function match(array $args)
    {
        $this->addStep('match', $args);

        return $this;
    }

    public function project(array $args)
    {
        $this->addStep('project', $args);

        return $this;
    }

    public function unwind($args)
    {
        $this->addStep('unwind', $args);

        return $this;
    }

    public function sort(array $args)
    {
        $this->addStep('sort', $args);

        return $this;
    }


    public function limit($limit)
    {
        $this->addStep('limit', $limit);

        return $this;
    }

    public function skip($skip)
    {
        $this->addStep('skip', $skip);

        return $this;
    }

    private function addStep($name, $args)
    {
        $this->steps[] = ['name' => $this->cmd . $name, 'args' => $args];
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->steps);
    }
}