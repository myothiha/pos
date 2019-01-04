<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\StockIn
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockIn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockIn newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockIn query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockIn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockIn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockIn whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $voucherNo
 * @property int $location_id
 * @property int $supplier_id
 * @property string $remark
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockIn whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockIn whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockIn whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockIn whereSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockIn whereVoucherNo($value)
 */
class StockIn extends Model
{
    //
}
