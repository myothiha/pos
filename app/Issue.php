<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Issue
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Issue whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Issue extends Model
{
    //
}
