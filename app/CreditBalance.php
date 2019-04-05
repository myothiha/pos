<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\CreditBalance
 *
 * @property-read Customer $customer
 * @method static Builder|CreditBalance newModelQuery()
 * @method static Builder|CreditBalance newQuery()
 * @method static Builder|CreditBalance query()
 * @mixin Eloquent
 * @property int $id
 * @property int $customer_id
 * @property int $amount
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|CreditBalance whereAmount($value)
 * @method static Builder|CreditBalance whereCreatedAt($value)
 * @method static Builder|CreditBalance whereCustomerId($value)
 * @method static Builder|CreditBalance whereDeletedAt($value)
 * @method static Builder|CreditBalance whereId($value)
 * @method static Builder|CreditBalance whereUpdatedAt($value)
 */
class CreditBalance extends Model
{

    protected $fillable = [
        'customer_id',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
