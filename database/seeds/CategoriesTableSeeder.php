<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::insert([
            ['name' => 'Category A'],
            ['name' => 'Category B'],
            ['name' => 'Category C'],
        ]);
    }
}
