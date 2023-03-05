<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show($id = "")
    {
        if ($id == "") {
            return view('shop');
        } else {
            return view('shop_page', compact('id'));
        }
    }
}