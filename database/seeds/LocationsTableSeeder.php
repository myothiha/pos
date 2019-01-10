<?php

use App\Location;
use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::insert([
                ['name' => 'Yangon'],
                ['name' => 'Mandalay'],
            ]
        );
    }
}
