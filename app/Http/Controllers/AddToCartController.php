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
//        $item = Item::where('itemCode', $request->itemCode)->with('color')->with('category')->get();

        $items = Item::query()
            ->when($request->itemCode, function ($q) use ($request) {
                return $q->where('itemCode', 'LIKE', "%{$request->itemCode}%");
            })
            ->when($request->itemName, function ($q) use ($request) {
                return $q->where('name', 'LIKE', "%{$request->itemName}%");
            })
            ->when($request->color_id, function ($q) use ($request) {
                return $q->where('color_id', '=', $request->color_id);
            })
            ->when($request->type_id, function ($q) use ($request) {
                return $q->where('type_id', '=', $request->type_id);
            })
            ->when($request->category_id, function ($q) use ($request) {
                return $q->where('category_id', '=', $request->category_id);
            })
            ->with('color')->with('category')->get();

        return $items->toJson();
    }

    public function addItem(Request $request)
    {
        $itemId = $request->itemId;
        $cart = $request->cart;
        $item = Item::find($itemId);
        $cartItem = Cart::instance($cart)->add($item->id, $item->name, 1, 0, ['color' => $item->color->name, 'category' => $item->category->name]);
        $cartItem->associate('App\Item');
        Log::debug(Cart::instance($cart)->content()->toJson());

        return Cart::instance($cart)->content()->toJson();
    }

    public function removeItem(Request $request)
    {
        $rowId = $request->rowId;
        $cart = $cart = $request->cart;
        Cart::instance($cart)->remove($rowId);

        return Cart::instance($cart)->content()->toJson();
    }

    public function updateItem(Request $request, Item $item)
    {
        $cart = $cart = $request->cart;
        $rowId = $request->rowId;
        $price = $request->price;
        $qty = $request->qty;

        if ($qty) {
            Cart::instance($cart)->update($rowId, ['qty' => $qty]);
        } else {
            Cart::instance($cart)->update($rowId, ['price' => $price]);

        }

        return Cart::instance($cart)->content()->toJson();
    }
}
