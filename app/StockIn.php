<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\StockIn
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|StockIn newModelQuery()
 * @method static Builder|StockIn newQuery()
 * @method static Builder|StockIn query()
 * @method static Builder|StockIn whereCreatedAt($value)
 * @method static Builder|StockIn whereId($value)
 * @method static Builder|StockIn whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string $voucherNo
 * @property int $location_id
 * @property int $supplier_id
 * @property string $remark
 * @property string|null $deleted_at
 * @method static Builder|StockIn whereDeletedAt($value)
 * @method static Builder|StockIn whereLocationId($value)
 * @method static Builder|StockIn whereRemark($value)
 * @method static Builder|StockIn whereSupplierId($value)
 * @method static Builder|StockIn whereVoucherNo($value)
 * @property-read Collection|Item[] $items
 */
class StockIn extends Model
{
    use SoftDeletes;

    public function items()
    {
        return $this->belongsToMany(Item::class, 'stock_in_details')->withPivot('item_id', 'quantity');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

}
