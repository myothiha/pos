<?php

namespace App;

use App\Helpers\CustomFilter;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Store
 *
 * @property int $id
 * @property int $location_id
 * @property int $item_id
 * @property int $quantity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Store newModelQuery()
 * @method static Builder|Store newQuery()
 * @method static Builder|Store query()
 * @method static Builder|Store whereCreatedAt($value)
 * @method static Builder|Store whereId($value)
 * @method static Builder|Store whereItemId($value)
 * @method static Builder|Store whereLocationId($value)
 * @method static Builder|Store whereQuantity($value)
 * @method static Builder|Store whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $deleted_at
 * @property-read Item $item
 * @property-read Location $location
 * @method static Builder|Store whereDeletedAt($value)
 */
class Store extends Model
{
    use CustomFilter;

    protected $fillable = [
        'location_id',
        'item_id',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
