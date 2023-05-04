<?php

namespace App;

use App\Helpers\CustomFilter;
use Eloquent;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

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
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Item newModelQuery()
 * @method static Builder|Item newQuery()
 * @method static Builder|Item query()
 * @method static Builder|Item whereCategoryId($value)
 * @method static Builder|Item whereColorId($value)
 * @method static Builder|Item whereCreatedAt($value)
 * @method static Builder|Item whereId($value)
 * @method static Builder|Item whereIsActive($value)
 * @method static Builder|Item whereItemCode($value)
 * @method static Builder|Item whereName($value)
 * @method static Builder|Item whereRemark($value)
 * @method static Builder|Item whereTypeId($value)
 * @method static Builder|Item whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string|null $deleted_at
 * @property-read Category $category
 * @property-read Color $color
 * @property-read Collection|Damage[] $damages
 * @property-read Collection|StockOpening[] $stockOpenings
 * @property-read Collection|Store[] $stores
 * @property-read Type $type
 * @method static Builder|Item whereDeletedAt($value)
 * @property-read Collection|Sale[] $sales
 * @property-read Collection|StockIn[] $stockIns
 * @property-read Collection|Transfer[] $transfers
 * @property-read Collection|Issue[] $issues
 * @property-read mixed $quantity
 * @property-read mixed $total
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item customDateFilter($column, $from, $to)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item customFilter($column, $op, $value)
 */
class Item extends Model implements Buyable
{
    use CustomFilter;

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

    public function sales()
    {
        return $this->belongsToMany(Sale::class, 'sale_details')->withPivot('quantity', 'price', 'total');
    }

    public function stockIns()
    {
        return $this->belongsToMany(StockIn::class, 'stock_in_details')->withPivot('quantity');
    }

    public function transfers()
    {
        return $this->belongsToMany(Transfer::class, 'transfer_details');
    }

    public function issues()
    {
        return $this->hasMany(Issue::class);
    }

    public function getQuantityAttribute()
    {
        return $this->sales->sum(function(Sale $sale) {
            return $sale->pivot->quantity;
        });
    }

    public function getTotalAttribute()
    {
        return $this->sales->sum(function(Sale $sale) {
            return $sale->pivot->total;
        });
    }

    /**
     * Get the identifier of the Buyable item.
     *
     * @return int|string
     */
    public function getBuyableIdentifier($options = null)
    {
        // TODO: Implement getBuyableIdentifier() method.
        return $this->id;
    }

    /**
     * Get the description or title of the Buyable item.
     *
     * @return string
     */
    public function getBuyableDescription($options = null)
    {
        // TODO: Implement getBuyableDescription() method.
        return $this->name;
    }

    /**
     * Get the price of the Buyable item.
     *
     * @return float
     */
    public function getBuyablePrice($options = null)
    {
        // TODO: Implement getBuyablePrice() method.
        return 0;
    }
}
