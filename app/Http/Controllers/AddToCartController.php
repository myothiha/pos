<?php

namespace App\Http\Controllers;

use App\Item;
use Cart;
use Illuminate\Http\Request;

class AddToCartController extends Controller
{

    public function addItem(Request $request, Item $item)
    {
        $itemId = $request->itemId;
        $item = Item::find($itemId);
        $price = $request->price;

        $cartItem = Cart::add($item->id, $item->name, 1, $price , ['color' => $item->color->name]);
        $cartItem->associate('Item');

        return $item;
    }

    public function removeItem(Request $request, Item $item)
    {
        $rowId = $request->rowId;
        Cart::remove($rowId);
    }

    public function updateItem(Request $request, Item $item)
    {
        $rowId = $request->rowId;
        $price = $request->price;
        $qty = $request->qty;

        Cart::update($rowId, ['quantity' => $qty, 'price' => $price]);
    }
}
