<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Employee
 *
 * @property int $id
 * @property string $name
 * @property string|null $dob
 * @property string|null $gender
 * @property string|null $phone
 * @property string|null $address
 * @property int $isActive
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Employee newModelQuery()
 * @method static Builder|Employee newQuery()
 * @method static Builder|Employee query()
 * @method static Builder|Employee whereAddress($value)
 * @method static Builder|Employee whereCreatedAt($value)
 * @method static Builder|Employee whereDob($value)
 * @method static Builder|Employee whereGender($value)
 * @method static Builder|Employee whereId($value)
 * @method static Builder|Employee whereIsActive($value)
 * @method static Builder|Employee whereName($value)
 * @method static Builder|Employee wherePhone($value)
 * @method static Builder|Employee whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $deleted_at
 * @method static Builder|Employee whereDeletedAt($value)
 */
class Employee extends Model
{
    protected $dates = [
        'dob'
    ];

    protected $casts = [
        'isActive' => 'boolean',
    ];
}
