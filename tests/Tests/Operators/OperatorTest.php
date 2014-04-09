<?php

namespace Tests\Operators;

use Solution\MongoAggregation\Pipeline\Operators\Expr;
use Tests\QueryBaseTest;

class OperatorTest extends QueryBaseTest
{
    static public function operators()
    {
        return [
            //group
            ['sum', 'sum'],
            ['avg', 'avg'],
            ['first', 'first'],
            ['last', 'last'],
            ['min', 'min'],
            ['max', 'max'],
            ['push', 'push'],
            ['addToSet', 'addToSet'],
            // boolean
            ['andX', 'and'],
            ['orX', 'or'],
            ['not', 'not'],
            // arithmetic
            ['add', 'add'],
            ['divide', 'divide'],
            ['mod', 'mod'],
            ['multiply', 'multiply'],
            ['subtract', 'subtract'],
            ['subtract', 'subtract'],
            //comprasion
            ['cmp', 'cmp'],
            ['eq', 'eq'],
            ['gt', 'gt'],
            ['gte', 'gte'],
            ['lt', 'lt'],
            ['lte', 'lte'],
            ['ne', 'ne'],
            ['in', 'in'],
            ['nin', 'nin'],
            //conditional
            ['cond', 'cond'],
            ['ifNull', 'ifNull'],
            //date
            ['dayOfYear', 'dayOfYear'],
            ['dayOfMonth', 'dayOfMonth'],
            ['dayOfWeek', 'dayOfWeek'],
            ['hour', 'hour'],
            ['millisecond', 'millisecond'],
            ['minute', 'minute'],
            ['month', 'month'],
            ['second', 'second'],
            ['week', 'week'],
            ['year', 'year'],
            //string
            ['concat', 'concat'],
            ['strcasecmp', 'strcasecmp'],
            ['substr', 'substr'],
            ['toLower', 'toLower'],
            ['toUpper', 'toUpper'],

        ];
    }

    /**
     * @dataProvider operators
     * @param $name
     * @param $cmd
     */
    public function testOperator($name, $cmd)
    {
        $realPipe = [
            ['$match' => ['cash' => ['$' . $cmd => []]]],
        ];
        $exp = new Expr();
        $pipeline = $this->query
            ->addStage('stage1')
            ->match(['cash' => $exp->$name([])])
            ->getQuery();

        $this->assertEquals($realPipe, $pipeline->getPipeline());
    }

    public function testSum()
    {
        $realPipe = [
            ['$group' => ['name' => ['$sum' => ['$sum' => '$field']]]],
            ['$limit' => 5],
        ];

        $exp = new Expr();
        $pipeline = $this->query
            ->addStage('stage1')
            ->group(['name' => $exp->sum($exp->sum('$field'))])
            ->limit(5)
            ->getQuery();

        $this->assertEquals($realPipe, $pipeline->getPipeline());
    }

    public function testAnd()
    {
        $realPipe = [
            ['$match' => ['cash' => ['$and' => [['$gt' => 50], ['$gt' => ['$sum' => '$cash']]]]]],
            ['$limit' => 5],
        ];
        $exp = new Expr();
        $pipeline = $this->query
            ->addStage('stage1')
            ->match(['cash' => $exp->andX([$exp->gt(50), $exp->gt($exp->sum('$cash'))])])
            ->limit(5)
            ->getQuery();

        $this->assertEquals($realPipe, $pipeline->getPipeline());
    }
}
