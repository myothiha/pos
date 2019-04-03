<?php

namespace App;

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
 * @mixin \Eloquent
 * @property int $issue_id
 * @property int $employee_id
 * @property int $acceptQty
 * @property int $rejectQty
 * @property string|null $deleted_at
 * @method static Builder|Inspect whereAcceptQty($value)
 * @method static Builder|Inspect whereDeletedAt($value)
 * @method static Builder|Inspect whereEmployeeId($value)
 * @method static Builder|Inspect whereIssueId($value)
 * @method static Builder|Inspect whereRejectQty($value)
 */
class Inspect extends Model
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
}
