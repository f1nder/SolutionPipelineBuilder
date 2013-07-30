<?php

namespace Tests;

use Solution\MongoAggregation\Configuration;
use Solution\MongoAggregation\Pipeline\Query as Query;

class QueryBaseTest extends \PHPUnit_Framework_TestCase
{
    /** @var  Query */
    protected $query;

    protected function setUp()
    {
        $configuration = new Configuration();
        $this->query = new Query($configuration);
    }

    public function testInstanse()
    {
        $this->assertInstanceOf('Solution\MongoAggregation\Pipeline\Query', $this->query);
    }
}
