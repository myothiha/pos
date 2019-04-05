<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Supplier
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $address
 * @property int $isActive
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Supplier newModelQuery()
 * @method static Builder|Supplier newQuery()
 * @method static Builder|Supplier query()
 * @method static Builder|Supplier whereAddress($value)
 * @method static Builder|Supplier whereCreatedAt($value)
 * @method static Builder|Supplier whereId($value)
 * @method static Builder|Supplier whereIsActive($value)
 * @method static Builder|Supplier whereName($value)
 * @method static Builder|Supplier wherePhone($value)
 * @method static Builder|Supplier whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $deleted_at
 * @method static Builder|Supplier whereDeletedAt($value)
 */
class Supplier extends Model
{
    protected $casts = [
        'isActive' => 'boolean',
    ];
}
