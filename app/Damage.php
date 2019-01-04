<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Damage
 *
 * @property int $id
 * @property int $location_id
 * @property int $item_id
 * @property int $quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Damage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Damage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Damage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Damage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Damage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Damage whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Damage whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Damage whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Damage whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $deleted_at
 * @property-read \App\Item $item
 * @property-read \App\Location $location
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Damage whereDeletedAt($value)
 */
class Damage extends Model
{
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
