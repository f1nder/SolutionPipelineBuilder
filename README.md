SolutionPipelineBuilder [![Build Status](https://travis-ci.org/f1nder/SolutionPipelineBuilder.png?branch=master)](https://travis-ci.org/f1nder/SolutionPipelineBuilder)
=======================

Query builder for Mongo Aggregation  [Framework](http://docs.mongodb.org/manual/aggregation/)

Library not yet ready.

###Usage

``` php
  $configuration = new Configuration();
  $query = new Query($configuration);

  $pipeline = $query->addStage('stage1')
                ->match(['name' => 'sasha', 'lastname' => 'Grey'])
                ->getQuery()
                ->getPipeline();
```
####Return
``` php
        [
            ['$match' => ['name' => 'Sasha', 'lastname' => 'Grey']]
        ];
```

