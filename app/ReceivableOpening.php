<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ReceivableOpening
 *
 * @property int $id
 * @property int $location_id
 * @property int $customer_id
 * @property int $balance
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReceivableOpening newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReceivableOpening newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReceivableOpening query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReceivableOpening whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReceivableOpening whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReceivableOpening whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReceivableOpening whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReceivableOpening whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReceivableOpening whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ReceivableOpening extends Model
{
    //
}
