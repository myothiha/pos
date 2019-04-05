<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\TransferDetail
 *
 * @property int $id
 * @property int $transfer_id
 * @property int $item_id
 * @property int $quantity
 * @property int $price
 * @property int $total
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static Builder|TransferDetail newModelQuery()
 * @method static Builder|TransferDetail newQuery()
 * @method static Builder|TransferDetail query()
 * @method static Builder|TransferDetail whereCreatedAt($value)
 * @method static Builder|TransferDetail whereDeletedAt($value)
 * @method static Builder|TransferDetail whereId($value)
 * @method static Builder|TransferDetail whereItemId($value)
 * @method static Builder|TransferDetail wherePrice($value)
 * @method static Builder|TransferDetail whereQuantity($value)
 * @method static Builder|TransferDetail whereTotal($value)
 * @method static Builder|TransferDetail whereTransferId($value)
 * @method static Builder|TransferDetail whereUpdatedAt($value)
 * @mixin Eloquent
 */
class TransferDetail extends Model
{
    //
}
