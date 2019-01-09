<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Issue
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $employee_id
 * @property int $itemId
 * @property int $quantity
 * @property string $paint
 * @property string $tinder
 * @property string $liker
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue whereLiker($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue wherePaint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue whereTinder($value)
 */
class Issue extends Model
{
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
