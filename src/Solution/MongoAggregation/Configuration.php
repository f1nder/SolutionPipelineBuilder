<?php
namespace Solution\MongoAggregation;

class Configuration
{
    protected $attributes = array(
        'mongoCmd' => '$'
    );

    /**
     * Get the MongoDB command prefix.
     *
     * @return string
     */
    public function getMongoCmd()
    {
        return $this->attributes['mongoCmd'];
    }


    /**
     * Set the MongoDB command prefix.
     *
     * @param string $cmd
     */
    public function setMongoCmd($cmd)
    {
        $this->attributes['mongoCmd'] = $cmd;
    }
}