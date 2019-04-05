<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\StockInDetail
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|StockInDetail newModelQuery()
 * @method static Builder|StockInDetail newQuery()
 * @method static Builder|StockInDetail query()
 * @method static Builder|StockInDetail whereCreatedAt($value)
 * @method static Builder|StockInDetail whereId($value)
 * @method static Builder|StockInDetail whereUpdatedAt($value)
 * @mixin Eloquent
 * @property int $stock_in_id
 * @property int $item_id
 * @property int $quantity
 * @property string|null $deleted_at
 * @method static Builder|StockInDetail whereDeletedAt($value)
 * @method static Builder|StockInDetail whereItemId($value)
 * @method static Builder|StockInDetail whereQuantity($value)
 * @method static Builder|StockInDetail whereStockInId($value)
 */
class StockInDetail extends Model
{
    //
}
