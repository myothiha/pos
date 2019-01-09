<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Transfer
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer query()
 * @mixin \Eloquent
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereUpdatedAt($value)
 * @property string $voucherNo
 * @property int $location_id
 * @property string $remark
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereVoucherNo($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $items
 */
class Transfer extends Model
{
    public function items()
    {
        return $this->belongsToMany(Item::class, 'transfer_details');
    }
}
