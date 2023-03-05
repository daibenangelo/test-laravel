<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrdersProduct;
use DB;

class OrdersController extends Controller
{
    public function placeOrder(Request $request)
    {
        $order = new Order;
        $order->student_id = 1;
        $order->save();

        $products = DB::select("SELECT * FROM products WHERE stock > 0");
        for ($i = 0; $i < count($products); $i++) {
            $ordered = $request->input('order_' . str($products[$i]->product_id));
            if ($ordered > 0) {
                $order_product = new OrdersProduct();
                $order_product->order_id = $order->order_id;
                $order_product->product_id = $products[$i]->product_id;
                $order_product->quantity = $ordered;
                $order_product->save();
            }
        }
        return redirect('/cafeteria/done');
    }
    public function takeOrder(Request $request)
    {
        $products = DB::select("SELECT * FROM products WHERE stock > 0");
        $selected_products = array();
        $total = 0;
        for ($i = 0; $i < count($products); $i++) {
            if (intval($request->input('order_' . str($products[$i]->product_id))) > 0) {
                $total += $products[$i]->price * $request->input('order_' . str($products[$i]->product_id));
                array_push($selected_products, $products[$i]);
            }
        }
        return view('users_cafeteria_checkout', compact('total', 'products', 'selected_products', 'request'));
    }
    public function showCafeteria()
    {
        $menu = DB::select("SELECT * FROM products WHERE stock > 0");
        return view('users_cafeteria', compact('menu'));
    }
}