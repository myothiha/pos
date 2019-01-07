<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\CreditBalance
 *
 * @property-read \App\Customer $customer
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CreditBalance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CreditBalance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CreditBalance query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $customer_id
 * @property int $amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CreditBalance whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CreditBalance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CreditBalance whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CreditBalance whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CreditBalance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CreditBalance whereUpdatedAt($value)
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
