<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Location
 *
 * @property int $id
 * @property string $name
 * @property int $isActive
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Location newModelQuery()
 * @method static Builder|Location newQuery()
 * @method static Builder|Location query()
 * @method static Builder|Location whereCreatedAt($value)
 * @method static Builder|Location whereId($value)
 * @method static Builder|Location whereIsActive($value)
 * @method static Builder|Location whereName($value)
 * @method static Builder|Location whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $deleted_at
 * @property-read Collection|Damage[] $damages
 * @property-read Collection|ReceivableOpening[] $receivableOpenings
 * @property-read Collection|StockOpening[] $stockOpenings
 * @property-read Collection|Store[] $stores
 * @method static Builder|Location whereDeletedAt($value)
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

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
