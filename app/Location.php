<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Location
 *
 * @property int $id
 * @property string $name
 * @property int $isActive
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Damage[] $damages
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ReceivableOpening[] $receivableOpenings
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\StockOpening[] $stockOpenings
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Store[] $stores
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereDeletedAt($value)
 */
class Location extends Model
{
    protected $casts = [
        'isActive' => 'boolean',
    ];

    public function stockOpenings()
    {
        return $this->hasMany(StockOpening::class);
    }

    public function receivableOpenings()
    {
        return $this->hasMany(ReceivableOpening::class);
    }

    public function damages()
    {
        return $this->hasMany(Damage::class);
    }

    public function stores()
    {
        return $this->hasMany(Store::class);
    }
}
