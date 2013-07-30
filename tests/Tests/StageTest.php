<?php

namespace Tests;

class StageTest extends QueryBaseTest
{

    public function testLimit()
    {
        $realPipe = [
            ['$match' => ['name' => 'sasha']],
            ['$limit' => 5],
        ];

        $pipeline = $this->query
            ->addStage('stage1')
            ->match(['name' => 'sasha'])->getQuery()

            ->addStage('stage2')
            ->limit(5)
            ->getQuery();

        $this->assertEquals($realPipe, $pipeline->getPipeline());
    }

    public function testSort()
    {
        $realPipe = [
            ['$match' => ['name' => 'sasha']],
            ['$sort' => ['name' => 1]],
            ['$limit' => 5],
        ];

        $pipeline = $this->query
            ->addStage('stage1')
            ->match(['name' => 'sasha'])
            ->sort(['name' => 1])
            ->getQuery()
            ->addStage('stage2')
            ->limit(5)
            ->getQuery();

        $this->assertEquals($realPipe, $pipeline->getPipeline());
    }
}
