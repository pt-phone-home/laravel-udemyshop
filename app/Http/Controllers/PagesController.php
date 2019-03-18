<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function tours() {
        return view('tours');
    }

    public function eye() {

        $products= Product::all();

        return view('tours.eye')->with('products', $products);
    }

    public function cliffs() {
        return view('tours.cliffs');
    }

    public function fishing() {
        return view('tours.fishing');
    }
}
