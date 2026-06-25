<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shopMerchandise()
    {
        return view('shop.merchandise');
    }
    public function shopMusicSheets()
    {
        return view('shop.music-sheets');
    }
}
