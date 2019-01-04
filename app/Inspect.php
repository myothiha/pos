<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Inspect
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $issue_id
 * @property int $employee_id
 * @property int $acceptQty
 * @property int $rejectQty
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect whereAcceptQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect whereIssueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect whereRejectQty($value)
 */
class Inspect extends Model
{
    //
}
