<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Sale
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Sale newModelQuery()
 * @method static Builder|Sale newQuery()
 * @method static Builder|Sale query()
 * @method static Builder|Sale whereCreatedAt($value)
 * @method static Builder|Sale whereId($value)
 * @method static Builder|Sale whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string $voucherNo
 * @property string $processType
 * @property string $saleType
 * @property int $customer_id
 * @property int $location_id
 * @property int $totalAmount
 * @property int $paid
 * @property int $balance
 * @property string $remark
 * @property string $isPaid
 * @property string|null $deleted_at
 * @method static Builder|Sale whereBalance($value)
 * @method static Builder|Sale whereCustomerId($value)
 * @method static Builder|Sale whereDeletedAt($value)
 * @method static Builder|Sale whereIsPaid($value)
 * @method static Builder|Sale whereLocationId($value)
 * @method static Builder|Sale wherePaid($value)
 * @method static Builder|Sale whereProcessType($value)
 * @method static Builder|Sale whereRemark($value)
 * @method static Builder|Sale whereSaleType($value)
 * @method static Builder|Sale whereTotalAmount($value)
 * @method static Builder|Sale whereVoucherNo($value)
 * @property-read Collection|Item[] $items
 * @property-read Customer $customer
 * @property-read Location $location
 * @property  user_id
 */
class Sale extends Model
{

    public function items()
    {
        return $this->belongsToMany(Item::class, 'sale_details')->withPivot('item_id', 'quantity', 'price', 'total');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
