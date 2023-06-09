<?php

namespace App;

use App\Helpers\CustomFilter;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * App\Receivable
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Receivable newModelQuery()
 * @method static Builder|Receivable newQuery()
 * @method static Builder|Receivable query()
 * @method static Builder|Receivable whereCreatedAt($value)
 * @method static Builder|Receivable whereId($value)
 * @method static Builder|Receivable whereUpdatedAt($value)
 * @mixin Eloquent
 * @property int $customer_id
 * @property int $location_id
 * @property string $voucherNo
 * @property int $amount
 * @property string|null $deleted_at
 * @method static Builder|Receivable whereAmount($value)
 * @method static Builder|Receivable whereCustomerId($value)
 * @method static Builder|Receivable whereDeletedAt($value)
 * @method static Builder|Receivable whereLocationId($value)
 * @method static Builder|Receivable whereVoucherNo($value)
 * @property-read Customer $customer
 * @property int user_id
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Receivable onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receivable whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Receivable withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Receivable withoutTrashed()
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receivable customDateFilter($column, $from, $to)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receivable customFilter($column, $op, $value)
 */
class Receivable extends Model
{
    use SoftDeletes, CustomFilter;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
