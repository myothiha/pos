<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Item
 *
 * @property int $id
 * @property string $name
 * @property string $itemCode
 * @property int $type_id
 * @property int $category_id
 * @property int $color_id
 * @property string|null $remark
 * @property int $isActive
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereItemCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Item extends Model
{
    protected $casts = [
        'isActive' => 'boolean',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function stockOpenings()
    {
        return $this->hasMany(StockOpening::class);
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
