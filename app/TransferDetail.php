<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\TransferDetail
 *
 * @property int $id
 * @property int $transfer_id
 * @property int $item_id
 * @property int $quantity
 * @property int $price
 * @property int $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TransferDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TransferDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TransferDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TransferDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TransferDetail whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TransferDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TransferDetail whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TransferDetail wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TransferDetail whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TransferDetail whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TransferDetail whereTransferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TransferDetail whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TransferDetail extends Model
{
    //
}
