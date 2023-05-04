<?php

namespace App;

use App\Helpers\CustomFilter;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Inspect
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Inspect newModelQuery()
 * @method static Builder|Inspect newQuery()
 * @method static Builder|Inspect query()
 * @method static Builder|Inspect whereCreatedAt($value)
 * @method static Builder|Inspect whereId($value)
 * @method static Builder|Inspect whereUpdatedAt($value)
 * @mixin Eloquent
 * @property int $issue_id
 * @property int $employee_id
 * @property int $acceptQty
 * @property int $rejectQty
 * @property string|null $deleted_at
 * @property int user_id
 * @method static Builder|Inspect whereAcceptQty($value)
 * @method static Builder|Inspect whereDeletedAt($value)
 * @method static Builder|Inspect whereEmployeeId($value)
 * @method static Builder|Inspect whereIssueId($value)
 * @method static Builder|Inspect whereRejectQty($value)
 * @property int|null $item_id
 * @property string|null $remark
 * @property-read \App\Employee $employee
 * @property-read \App\Item|null $item
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect customDateFilter($column, $from, $to)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect customFilter($column, $op, $value)
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Inspect onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Inspect withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Inspect withoutTrashed()
 * @property int $user_id
 */
class Inspect extends Model
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
}
