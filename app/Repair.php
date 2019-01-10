<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Repair
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $employee_id
 * @property int $item_id
 * @property int $itemQty
 * @property string $paint
 * @property string $tinker
 * @property string $liker
 * @property string $referenceId
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair whereItemQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair whereLiker($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair wherePaint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair whereReferenceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair whereTinker($value)
 * @property int $inspect_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair whereInspectId($value)
 */
class Repair extends Model
{
    //
}
