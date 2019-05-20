<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Transfer
 *
 * @method static Builder|Transfer newModelQuery()
 * @method static Builder|Transfer newQuery()
 * @method static Builder|Transfer query()
 * @mixin Eloquent
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Transfer whereCreatedAt($value)
 * @method static Builder|Transfer whereId($value)
 * @method static Builder|Transfer whereUpdatedAt($value)
 * @property string $voucherNo
 * @property int $location_id
 * @property string $remark
 * @property string|null $deleted_at
 * @method static Builder|Transfer whereDeletedAt($value)
 * @method static Builder|Transfer whereLocationId($value)
 * @method static Builder|Transfer whereRemark($value)
 * @method static Builder|Transfer whereVoucherNo($value)
 * @property-read Collection|Item[] $items
 * @property-read mixed $quantity
 * @property-read Location $location
 * @property int user_id
 */
class Transfer extends Model
{
    use SoftDeletes;

    public function items()
    {
        return $this->belongsToMany(Item::class, 'transfer_details')->withPivot('item_id', 'quantity');
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function getQuantityAttribute()
    {
        return $this->items->sum(function(Item $item) {
            return $item->pivot->quantity;
        });
    }
}
