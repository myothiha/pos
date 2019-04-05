<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Customer
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $address
 * @property int $isActive
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Customer newModelQuery()
 * @method static Builder|Customer newQuery()
 * @method static Builder|Customer query()
 * @method static Builder|Customer whereAddress($value)
 * @method static Builder|Customer whereCreatedAt($value)
 * @method static Builder|Customer whereId($value)
 * @method static Builder|Customer whereIsActive($value)
 * @method static Builder|Customer whereName($value)
 * @method static Builder|Customer wherePhone($value)
 * @method static Builder|Customer whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $deleted_at
 * @property-read Collection|ReceivableOpening[] $receivableOpenings
 * @method static Builder|Customer whereDeletedAt($value)
 * @property-read CreditBalance $creditBalance
 */

class Customer extends Model
{
    protected $casts = [
        'isActive' => 'boolean',
    ];

    public function receivableOpenings()
    {
        return $this->hasMany(ReceivableOpening::class);
    }

    public function creditBalance()
    {
        return $this->hasOne(CreditBalance::class);
    }
}
