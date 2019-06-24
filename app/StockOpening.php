<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\StockOpening
 *
 * @property int $id
 * @property int $location_id
 * @property int $item_id
 * @property int $quantity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|StockOpening newModelQuery()
 * @method static Builder|StockOpening newQuery()
 * @method static Builder|StockOpening query()
 * @method static Builder|StockOpening whereCreatedAt($value)
 * @method static Builder|StockOpening whereId($value)
 * @method static Builder|StockOpening whereItemId($value)
 * @method static Builder|StockOpening whereLocationId($value)
 * @method static Builder|StockOpening whereQuantity($value)
 * @method static Builder|StockOpening whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $deleted_at
 * @property-read Item $item
 * @property-read Location $location
 * @method static Builder|StockOpening whereDeletedAt($value)
 * @property int $user_id
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\StockOpening onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockOpening whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StockOpening withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\StockOpening withoutTrashed()
 */
class StockOpening extends Model
{
    use SoftDeletes;

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
