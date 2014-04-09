<?php

namespace Solution\MongoAggregation\Pipeline\Operators;

use Solution\MongoAggregation\Pipeline\Operators;

/**
 * Class Expr
 * @package Solution\MongoAggregation\Pipeline\Operators
 */
class Expr
{
    /**
     * @param $arg
     * @return Group\Sum
     */
    public function sum($arg)
    {
        return new Operators\Group\Sum($arg);
    }

    /**
     * @param $arg
     * @return Group\AddToSet
     */
    public function addToSet($arg)
    {
        return new Operators\Group\AddToSet($arg);
    }

    /**
     * @param $arg
     * @return Group\Avg
     */
    public function avg($arg)
    {
        return new Operators\Group\Avg($arg);
    }

    /**
     * @param $arg
     * @return Group\First
     */
    public function first($arg)
    {
        return new Operators\Group\First($arg);
    }

    /**
     * @param $arg
     * @return Group\Last
     */
    public function last($arg)
    {
        return new Operators\Group\Last($arg);
    }

    /**
     * @param $arg
     * @return Group\Max
     */
    public function max($arg)
    {
        return new Operators\Group\Max($arg);
    }

    /**
     * @param $arg
     * @return Group\Min
     */
    public function min($arg)
    {
        return new Operators\Group\Min($arg);
    }

    /**
     * @param $arg
     * @return Group\Push
     */
    public function push($arg)
    {
        return new Operators\Group\Push($arg);
    }

    /**
     * @param $arg
     * @return Boolean\AndX
     */
    public function andX($arg)
    {
        return new Operators\Boolean\AndX($arg);
    }

    /**
     * @param $arg
     * @return Boolean\OrX
     */
    public function orX($arg)
    {
        return new Operators\Boolean\OrX($arg);
    }

    /**
     * @param $arg
     * @return Boolean\Not
     */
    public function not($arg)
    {
        return new Operators\Boolean\Not($arg);
    }

    /**
     * @param $arg
     * @return Comparison\Gt
     */
    public function gt($arg)
    {
        return new Operators\Comparison\Gt($arg);
    }

    /**
     * @param $arg
     * @return Comparison\Gte
     */
    public function gte($arg)
    {
        return new Operators\Comparison\Gte($arg);
    }

    /**
     * @param $arg
     * @return Comparison\Lt
     */
    public function lt($arg)
    {
        return new Operators\Comparison\Lt($arg);
    }

    /**
     * @param $arg
     * @return Comparison\Lte
     */
    public function lte($arg)
    {
        return new Operators\Comparison\Lte($arg);
    }

    /**
     * @param $arg
     * @return Comparison\Cmp
     */
    public function cmp($arg)
    {
        return new Operators\Comparison\Cmp($arg);
    }

    /**
     * @param $arg
     * @return Comparison\Eq
     */
    public function eq($arg)
    {
        return new Operators\Comparison\Eq($arg);
    }

    /**
     * @param $arg
     * @return Comparison\Ne
     */
    public function ne($arg)
    {
        return new Operators\Comparison\Ne($arg);
    }

    /**
     * @param $arg
     * @return Comparison\In
     */
    public function in($arg)
    {
        return new Operators\Comparison\In($arg);
    }

    /**
     * @param $arg
     * @return Comparison\Nin
     */
    public function nin($arg)
    {
        return new Operators\Comparison\Nin($arg);
    }

    /**
     * @param $arg
     * @return Arithmetic\Add
     */
    public function add($arg)
    {
        return new Operators\Arithmetic\Add($arg);
    }

    /**
     * @param $arg
     * @return Arithmetic\Divide
     */
    public function divide($arg)
    {
        return new Operators\Arithmetic\Divide($arg);
    }

    /**
     * @param $arg
     * @return Arithmetic\Mod
     */
    public function mod($arg)
    {
        return new Operators\Arithmetic\Mod($arg);
    }

    /**
     * @param $arg
     * @return Arithmetic\Multiply
     */
    public function multiply($arg)
    {
        return new Operators\Arithmetic\Multiply($arg);
    }

    /**
     * @param $arg
     * @return Arithmetic\Subtract
     */
    public function subtract($arg)
    {
        return new Operators\Arithmetic\Subtract($arg);
    }

    /**
     * @param $arg
     * @return String\Concat
     */
    public function concat($arg)
    {
        return new Operators\String\Concat($arg);
    }

    /**
     * @param $arg
     * @return String\Strcasecmp
     */
    public function strcasecmp($arg)
    {
        return new Operators\String\Strcasecmp($arg);
    }

    /**
     * @param $arg
     * @return String\Substr
     */
    public function substr($arg)
    {
        return new Operators\String\Substr($arg);
    }

    /**
     * @param $arg
     * @return String\ToLower
     */
    public function toLower($arg)
    {
        return new Operators\String\ToLower($arg);
    }

    /**
     * @param $arg
     * @return String\ToUpper
     */
    public function toUpper($arg)
    {
        return new Operators\String\ToUpper($arg);
    }

    /**
     * @param $arg
     * @return Date\DayOfMonth
     */
    public function dayOfMonth($arg)
    {
        return new Operators\Date\DayOfMonth($arg);
    }

    /**
     * @param $arg
     * @return Date\DayOfWeek
     */
    public function dayOfWeek($arg)
    {
        return new Operators\Date\DayOfWeek($arg);
    }

    /**
     * @param $arg
     * @return Date\DayOfYear
     */
    public function dayOfYear($arg)
    {
        return new Operators\Date\DayOfYear($arg);
    }

    /**
     * @param $arg
     * @return Date\Hour
     */
    public function hour($arg)
    {
        return new Operators\Date\Hour($arg);
    }

    /**
     * @param $arg
     * @return Date\Month
     */
    public function month($arg)
    {
        return new Operators\Date\Month($arg);
    }

    /**
     * @param $arg
     * @return Date\Second
     */
    public function second($arg)
    {
        return new Operators\Date\Second($arg);
    }

    /**
     * @param $arg
     * @return Date\Millisecond
     */
    public function millisecond($arg)
    {
        return new Operators\Date\Millisecond($arg);
    }

    /**
     * @param $arg
     * @return Date\Week
     */
    public function week($arg)
    {
        return new Operators\Date\Week($arg);
    }
    /**
     * @param $arg
     * @return Date\Year
     */
    public function year($arg)
    {
        return new Operators\Date\Year($arg);
    }
    /**
     * @param $arg
     * @return Date\Minute
     */
    public function minute($arg)
    {
        return new Operators\Date\Minute($arg);
    }

    /**
     * @param $arg
     * @return Conditional\Cond
     */
    public function cond($arg)
    {
        return new Operators\Conditional\Cond($arg);
    }

    /**
     * @param $arg
     * @return Conditional\IfNull
     */
    public function ifNull($arg)
    {
        return new Operators\Conditional\IfNull($arg);
    }
}