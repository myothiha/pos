<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\ReceivableOpening
 *
 * @property int $id
 * @property int $location_id
 * @property int $customer_id
 * @property int $balance
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|ReceivableOpening newModelQuery()
 * @method static Builder|ReceivableOpening newQuery()
 * @method static Builder|ReceivableOpening query()
 * @method static Builder|ReceivableOpening whereBalance($value)
 * @method static Builder|ReceivableOpening whereCreatedAt($value)
 * @method static Builder|ReceivableOpening whereCustomerId($value)
 * @method static Builder|ReceivableOpening whereId($value)
 * @method static Builder|ReceivableOpening whereLocationId($value)
 * @method static Builder|ReceivableOpening whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $deleted_at
 * @property-read Customer $customer
 * @property-read Location $location
 * @method static Builder|ReceivableOpening whereDeletedAt($value)
 * @property int $user_id
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\ReceivableOpening onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReceivableOpening whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ReceivableOpening withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\ReceivableOpening withoutTrashed()
 */
class ReceivableOpening extends Model
{
    use SoftDeletes;

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
