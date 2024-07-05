<?php

namespace App\Http\Controllers;

use App\Models\BeautyProduct;
use Illuminate\Http\Request;

class BeautyProductController extends Controller
{
    public function index()
    {
        return BeautyProduct::all();
    }
}
