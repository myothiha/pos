<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Sale
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale whereUpdatedAt($value)
 * @mixin \Eloquent
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale whereIsPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale wherePaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale whereProcessType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale whereSaleType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale whereVoucherNo($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $items
 * @property-read \App\Customer $customer
 * @property-read \App\Location $location
 */
class Sale extends Model
{

    public function items()
    {
        return $this->belongsToMany(Item::class, 'sale_details');
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
