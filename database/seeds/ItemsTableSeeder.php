<?php

use App\Item;
use App\Store;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Item::class, 20)->create()->each(function (Item $item) {
            $ygnStore = new Store();
            $ygnStore->item_id = $item->id;
            $ygnStore->location_id = 1;
            $ygnStore->quantity = 100;

            $ygnStockOpening = new \App\StockOpening();
            $ygnStockOpening->item_id = $item->id;
            $ygnStockOpening->location_id = 1;
            $ygnStockOpening->quantity = 100;

            $item->stores()->save($ygnStore);
            $item->stockOpenings()->save($ygnStockOpening);

            $mdyStore = new Store();
            $mdyStore->item_id = $item->id;
            $mdyStore->location_id = 2;
            $mdyStore->quantity = 100;

            $mdyStockOpening = new \App\StockOpening();
            $mdyStockOpening->item_id = $item->id;
            $mdyStockOpening->location_id = 2;
            $mdyStockOpening->quantity = 100;
            $item->stores()->save($mdyStore);
            $item->stockOpenings()->save($mdyStockOpening);
        });
    }
}
