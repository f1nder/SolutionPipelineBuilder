<?php

namespace Tests\Step;

use Tests\QueryBaseTest;
use Tests\QueryTest;

class StepTest extends QueryBaseTest
{

    public function testProject()
       {
           $realPipe = [
               ['$project' => ['name' , 'lastname']],
               ['$limit' => 5],
           ];

           $pipeline = $this->query
               ->addStage('stage1')
               ->project(['name' , 'lastname'])
               ->limit(5)
               ->getQuery();

           $this->assertEquals($realPipe, $pipeline->getPipeline());
       }

    public function testLimit()
    {
        $realPipe = [
            ['$match' => ['name' => 'sasha']],
            ['$limit' => 5],
        ];

        $pipeline = $this->query
            ->addStage('stage1')
            ->match(['name' => 'sasha'])
            ->limit(5)
            ->getQuery();

        $this->assertEquals($realPipe, $pipeline->getPipeline());
    }


    public function testSkip()
    {
        $realPipe = [
            ['$match' => ['name' => 'sasha']],
            ['$limit' => 5],
            ['$skip' => 15],
        ];

        $pipeline = $this->query
            ->addStage('stage1')
            ->match(['name' => 'sasha'])
            ->limit(5)
            ->skip(15)
            ->getQuery();

        $this->assertEquals($realPipe, $pipeline->getPipeline());
    }
}
