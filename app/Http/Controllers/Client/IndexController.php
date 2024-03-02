<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $blocks = Block::where('isActive', 1)->get();
        return view('client.index', compact('blocks'));
    }



    public function block()
    {
    }

}
