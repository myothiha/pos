<?php

namespace App;

use App\Helpers\CustomFilter;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Issue
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Issue newModelQuery()
 * @method static Builder|Issue newQuery()
 * @method static Builder|Issue query()
 * @method static Builder|Issue whereCreatedAt($value)
 * @method static Builder|Issue whereId($value)
 * @method static Builder|Issue whereUpdatedAt($value)
 * @mixin Eloquent
 * @property int $employee_id
 * @property int $itemId
 * @property int $quantity
 * @property string $paint
 * @property string $tinder
 * @property string $liker
 * @property string|null $deleted_at
 * @method static Builder|Issue whereDeletedAt($value)
 * @method static Builder|Issue whereEmployeeId($value)
 * @method static Builder|Issue whereItemId($value)
 * @method static Builder|Issue whereLiker($value)
 * @method static Builder|Issue wherePaint($value)
 * @method static Builder|Issue whereQuantity($value)
 * @method static Builder|Issue whereTinder($value)
 * @property int $item_id
 * @property string $remark
 * @property-read Employee $employee
 * @property-read Collection|Inspect[] $inspects
 * @property-read Item $item
 * @method static Builder|Issue whereRemark($value)
 * @property string $type
 * @property int user_id
 * @method static Builder|Issue whereType($value)
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue new()
 * @method static \Illuminate\Database\Query\Builder|\App\Issue onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue repair()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Issue withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Issue withoutTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue customDateFilter($column, $from, $to)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue customFilter($column, $op, $value)
 * @property int $user_id
 */
class Issue extends Model
{
    use SoftDeletes, CustomFilter;

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function inspects()
    {
        return $this->hasMany(Inspect::class);
    }

    public function scopeNew($query)
    {
        return $query->where("type", "=", Constants::NEW);
    }

    public function scopeRepair($query)
    {
        return $query->where("type", "=", Constants::REPAIR);
    }
}
