<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Damage
 *
 * @property int $id
 * @property int $location_id
 * @property int $item_id
 * @property int $quantity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Damage newModelQuery()
 * @method static Builder|Damage newQuery()
 * @method static Builder|Damage query()
 * @method static Builder|Damage whereCreatedAt($value)
 * @method static Builder|Damage whereId($value)
 * @method static Builder|Damage whereItemId($value)
 * @method static Builder|Damage whereLocationId($value)
 * @method static Builder|Damage whereQuantity($value)
 * @method static Builder|Damage whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $deleted_at
 * @property-read Item $item
 * @property-read Location $location
 * @method static Builder|Damage whereDeletedAt($value)
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
