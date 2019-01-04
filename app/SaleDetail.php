<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SaleDetail
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SaleDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SaleDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SaleDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SaleDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SaleDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SaleDetail whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $sale_id
 * @property int $item_id
 * @property int $quantity
 * @property int $price
 * @property int $total
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SaleDetail whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SaleDetail whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SaleDetail wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SaleDetail whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SaleDetail whereSaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SaleDetail whereTotal($value)
 */
class SaleDetail extends Model
{
    //
}
