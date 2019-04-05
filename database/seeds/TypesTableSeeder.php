<?php

use App\Type;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::insert([
            ['name' => 'Type A'],
            ['name' => 'Type B'],
            ['name' => 'Type C'],
        ]);
    }
}
