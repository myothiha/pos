<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Category
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App{
/**
 * App\Color
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Color whereUpdatedAt($value)
 */
	class Color extends \Eloquent {}
}

namespace App{
/**
 * App\Customer
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereUpdatedAt($value)
 */
	class Customer extends \Eloquent {}
}

namespace App{
/**
 * App\Damage
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Damage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Damage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Damage query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Damage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Damage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Damage whereUpdatedAt($value)
 */
	class Damage extends \Eloquent {}
}

namespace App{
/**
 * App\Employee
 *
 * @property int $id
 * @property string $name
 * @property string $dob
 * @property string $gender
 * @property string $phone
 * @property string $address
 * @property string $joinDate
 * @property int $isActive
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereJoinDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employee whereUpdatedAt($value)
 */
	class Employee extends \Eloquent {}
}

namespace App{
/**
 * App\Inspect
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Inspect whereUpdatedAt($value)
 */
	class Inspect extends \Eloquent {}
}

namespace App{
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
 */
	class Issue extends \Eloquent {}
}

namespace App{
/**
 * App\Item
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Item whereUpdatedAt($value)
 */
	class Item extends \Eloquent {}
}

namespace App{
/**
 * App\Location
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Location whereUpdatedAt($value)
 */
	class Location extends \Eloquent {}
}

namespace App{
/**
 * App\Receiveable
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receiveable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receiveable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receiveable query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receiveable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receiveable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receiveable whereUpdatedAt($value)
 */
	class Receiveable extends \Eloquent {}
}

namespace App{
/**
 * App\ReceiveableOpening
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReceiveableOpening newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReceiveableOpening newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReceiveableOpening query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReceiveableOpening whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReceiveableOpening whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ReceiveableOpening whereUpdatedAt($value)
 */
	class ReceiveableOpening extends \Eloquent {}
}

namespace App{
/**
 * App\Repair
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repair whereUpdatedAt($value)
 */
	class Repair extends \Eloquent {}
}

namespace App{
/**
 * App\Sale
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sale whereUpdatedAt($value)
 */
	class Sale extends \Eloquent {}
}

namespace App{
/**
 * App\SaleDetail
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SaleDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SaleDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SaleDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SaleDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SaleDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SaleDetail whereUpdatedAt($value)
 */
	class SaleDetail extends \Eloquent {}
}

namespace App{
/**
 * App\StockIn
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockIn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockIn newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockIn query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockIn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockIn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockIn whereUpdatedAt($value)
 */
	class StockIn extends \Eloquent {}
}

namespace App{
/**
 * App\StockInDetail
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockInDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockInDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockInDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockInDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockInDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockInDetail whereUpdatedAt($value)
 */
	class StockInDetail extends \Eloquent {}
}

namespace App{
/**
 * App\StockOpening
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockOpening newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockOpening newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockOpening query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockOpening whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockOpening whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\StockOpening whereUpdatedAt($value)
 */
	class StockOpening extends \Eloquent {}
}

namespace App{
/**
 * App\Store
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereUpdatedAt($value)
 */
	class Store extends \Eloquent {}
}

namespace App{
/**
 * App\Supplier
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereUpdatedAt($value)
 */
	class Supplier extends \Eloquent {}
}

namespace App{
/**
 * App\Type
 *
 * @property int $id
 * @property string $name
 * @property string $isActive
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Type whereUpdatedAt($value)
 */
	class Type extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string $role
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

