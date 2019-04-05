<?php

namespace App;

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
 * @method static Builder|Issue whereType($value)
 */
class Issue extends Model
{
    use SoftDeletes;

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
}
