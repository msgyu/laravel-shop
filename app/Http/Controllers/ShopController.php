<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stock;

class ShopController extends Controller
{
    public function index()
    {
        $stocks = Stock::Paginate(6);
        return view('shop', compact('stocks'));
    }
}
