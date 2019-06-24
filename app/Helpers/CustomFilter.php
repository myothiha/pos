<?php
/**
 * Created by PhpStorm.
 * User: Myo Thiha
 * Date: 6/19/2019
 * Time: 10:07 AM
 */

namespace App\Helpers;

trait CustomFilter
{
    public function scopeCustomFilter($query, $column, $op, $value)
    {
        return $query->when($value, function ($q) use ($column, $op, $value) {
            return $q->where($column, $op, $value);
        });
    }

    public function scopeCustomDateFilter($query, $column, $from, $to)
    {
        return $query->when($from, function ($q) use ($column, $from, $to) {
            return $q->whereDate('created_at', '>=', $from)
                ->whereDate('created_at', '<=', $to);
        });
    }
}