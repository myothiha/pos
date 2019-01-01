<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\StockOpening
 *
 * @property int $id
 * @property int $location_id
 * @property int $item_id
 * @property int $quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockOpening newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockOpening newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockOpening query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockOpening whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockOpening whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockOpening whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockOpening whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockOpening whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockOpening whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class StockOpening extends Model
{
    //
}
