<?php

namespace Tests;

use Solution\MongoAggregation\Configuration;
use Solution\MongoAggregation\Pipeline\Operators\Expr;
use Solution\MongoAggregation\Pipeline\Query;

class QueryTest extends QueryBaseTest
{

    public function testAddStage()
    {
        $this->query->addStage('first');
        $this->assertAttributeCount(1, 'stages', $this->query);
    }

    public function testAddStep()
    {
        $query = $this->query
            ->addStage('stage1')
            ->match(['name' => 'sasha'])
            ->getQuery()
            ->addStage('stage2')
            ->match(['lastname' => 'grey'])
            ->getQuery();

        $this->assertAttributeCount(2, 'stages', $query);
    }

    public function testPipeline()
    {
        $realPipe = [
            ['$match' => ['name' => 'sasha']],
            ['$match' => ['lastname' => 'grey']],
        ];

        $pipeline = $this->query
            ->addStage('stage1')
            ->match(['name' => 'sasha'])->getQuery()
            ->addStage('stage2')
            ->match(['lastname' => 'grey'])
            ->getQuery();

        $this->assertEquals($realPipe, $pipeline->getPipeline());
    }

    public function testModifyPipeline()
    {
        $realPipe = [
            ['$match' => ['name' => 'sasha']],
            ['$match' => ['modify1' => 'modify']],
            ['$match' => ['lastname' => 'grey']],
        ];

        $pipeline = $this->query->addStage('stage1')
            ->match(['name' => 'sasha'])
            ->getQuery()
            ->addStage('stage2')
            ->match(['lastname' => 'grey'])
            ->getQuery();;

        //modify
        $pipeline->getStage('stage1')->match(['modify1' => 'modify']);

        $this->assertEquals($realPipe, $pipeline->getPipeline());
    }

    public function testQuery1()
    {
        $pipeline = array(
            array(
                '$project' => array(
                    "author" => 1,
                    "tags" => 1,
                )
            ),
            array('$unwind' => '$tags'),
            array(
                '$group' => array(
                    "_id" => array("tags" => '$tags'),
                    "authors" => array('$addToSet' => '$author'),
                ),
            ),
        );
        $exp = new Expr();

        $query = $this->query->addStage('stage1')
            ->project(['author' => true, 'tags' => true])
            ->unwind('$tags')
            ->group(
                [
                    '_id' => ['tags' => '$tags'],
                    'authors' => $exp->addToSet('$author'),
                ]
            )
            ->getQuery();

        $this->assertEquals($pipeline, $query->getPipeline());
    }

}
