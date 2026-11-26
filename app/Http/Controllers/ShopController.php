<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Str;

class ShopController extends Controller
{
    /**
     * Display the shop page.
     */
    public function index(): View
    {
        return view('frontend.shop');
    }
}