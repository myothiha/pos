<?php

namespace App;

use App\Collections\SalesCollection;
use App\Helpers\CustomFilter;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
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
 * @property user_id
 * @property int $user_id
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Sale onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Sale withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Sale withoutTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale cashDown()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale customDateFilter($column, $from, $to)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale customFilter($column, $op, $value)
 */
class Sale extends Model
{
    use SoftDeletes, CustomFilter;

    /**
     * @param array $models
     * @return SalesCollection|Collection
     */
    public function newCollection(array $models = [])
    {
        return new SalesCollection($models);
    }

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

    public function scopeCashDown($query)
    {
        return $query->where("saleType", '=', Constants::CASH_DOWN);
    }
}
