<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $fruits = [
            'Mango',
            'Banana',
            'Apple',
            'Pieapple',
            'Orange',
            'Watermelon'
        ];
        return view('welcome', compact('fruits'));
    }
}
