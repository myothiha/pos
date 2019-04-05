<?php

use App\Constants;
use Carbon\Carbon;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'dob' => Carbon::now(),
        'gender' => Constants::MALE,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'isActive' => Constants::TRUE,
    ];
});

$factory->define(App\Color::class, function (Faker $faker) {
    return [
        'name' => $faker->colorName
    ];
});

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'itemCode' => $faker->asciify('*****'),
        'name' => $faker->word,
        'type_id' => $faker->randomElement([1,2,3]),
        'category_id' => $faker->randomElement([1,2,3]),
        'color_id' => $faker->randomElement([1,2,3]),
        'remark' => $faker->paragraph,
    ];
});

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'isActive' => Constants::TRUE,
    ];
});

$factory->define(App\Supplier::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'isActive' => Constants::TRUE,
    ];
});
