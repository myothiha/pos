<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\SaleDetail
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|SaleDetail newModelQuery()
 * @method static Builder|SaleDetail newQuery()
 * @method static Builder|SaleDetail query()
 * @method static Builder|SaleDetail whereCreatedAt($value)
 * @method static Builder|SaleDetail whereId($value)
 * @method static Builder|SaleDetail whereUpdatedAt($value)
 * @mixin Eloquent
 * @property int $sale_id
 * @property int $item_id
 * @property int $quantity
 * @property int $price
 * @property int $total
 * @property string|null $deleted_at
 * @method static Builder|SaleDetail whereDeletedAt($value)
 * @method static Builder|SaleDetail whereItemId($value)
 * @method static Builder|SaleDetail wherePrice($value)
 * @method static Builder|SaleDetail whereQuantity($value)
 * @method static Builder|SaleDetail whereSaleId($value)
 * @method static Builder|SaleDetail whereTotal($value)
 */
class SaleDetail extends Model
{
    //
}
