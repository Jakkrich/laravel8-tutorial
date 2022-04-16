<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name = 'Jakkrich';
        $users = [
            'name' => 'Jakkrich Changgon',
            'email' => 'test@test.com',
            'phone' => '0987654321'
        ];
        return view('user', compact('name', 'users'));
    }

    public function form(Request $request)
    {
        echo "Method: " . $request->method() . '<br/>';
        echo "Path: " . $request->path() . '<br/>';
        echo "fullUrl: " . $request->fullUrl() . '<br/>';
        echo "URL: " . $request->url() . '<br/>';
    }
}
