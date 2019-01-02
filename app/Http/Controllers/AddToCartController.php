<?php

namespace App\Http\Controllers;

use App\Item;
use Cart;
use Illuminate\Http\Request;
use Log;

class AddToCartController extends Controller
{

    public function searchItem(Request $request)
    {
        $item = Item::where('itemCode', $request->itemCode)->with('color')->with('category')->get();
        return $item->toJson();
    }

    public function addItem(Request $request)
    {
        $itemId = $request->itemId;
        $item = Item::find($itemId);
        $cartItem = Cart::add($item->id, $item->name, 1, 0 , ['color' => $item->color->name]);
        $cartItem->associate('Item');
        return Cart::content()->toJson();
    }

    public function removeItem(Request $request)
    {
        $rowId = $request->rowId;
        Cart::remove($rowId);

        return Cart::content()->toJson();
    }

    public function updateItem(Request $request, Item $item)
    {

        $rowId = $request->rowId;
        $price = $request->price;
        $qty = $request->qty;

        if ($price)
        {
            Cart::update($rowId, ['price' => $price]);
        }
        else {
            Cart::update($rowId, ['qty' => $qty]);
        }

        return Cart::content()->toJson();
    }
}
