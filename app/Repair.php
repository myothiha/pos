<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Repair
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Repair newModelQuery()
 * @method static Builder|Repair newQuery()
 * @method static Builder|Repair query()
 * @method static Builder|Repair whereCreatedAt($value)
 * @method static Builder|Repair whereId($value)
 * @method static Builder|Repair whereUpdatedAt($value)
 * @mixin Eloquent
 * @property int $employee_id
 * @property int $item_id
 * @property int $itemQty
 * @property string $paint
 * @property string $tinker
 * @property string $liker
 * @property string $referenceId
 * @property string|null $deleted_at
 * @method static Builder|Repair whereDeletedAt($value)
 * @method static Builder|Repair whereEmployeeId($value)
 * @method static Builder|Repair whereItemId($value)
 * @method static Builder|Repair whereItemQty($value)
 * @method static Builder|Repair whereLiker($value)
 * @method static Builder|Repair wherePaint($value)
 * @method static Builder|Repair whereReferenceId($value)
 * @method static Builder|Repair whereTinker($value)
 * @property int $inspect_id
 * @method static Builder|Repair whereInspectId($value)
 */
class Repair extends Model
{
    //
}
