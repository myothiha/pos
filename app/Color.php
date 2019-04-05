<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Color
 *
 * @property int $id
 * @property string $name
 * @property int $isActive
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Color newModelQuery()
 * @method static Builder|Color newQuery()
 * @method static Builder|Color query()
 * @method static Builder|Color whereCreatedAt($value)
 * @method static Builder|Color whereId($value)
 * @method static Builder|Color whereIsActive($value)
 * @method static Builder|Color whereName($value)
 * @method static Builder|Color whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $deleted_at
 * @property-read Collection|Item[] $items
 * @method static Builder|Color whereDeletedAt($value)
 */
class Color extends Model
{
    protected $casts = [
        'isActive' => 'boolean',
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
