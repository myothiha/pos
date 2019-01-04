<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\StockInDetail
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockInDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockInDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockInDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockInDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockInDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockInDetail whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $stock_in_id
 * @property int $item_id
 * @property int $quantity
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockInDetail whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockInDetail whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockInDetail whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockInDetail whereStockInId($value)
 */
class StockInDetail extends Model
{
    //
}
