<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index()
    {
        echo '<h1>Fluent Strings</h1>';

        $str = Str::of('Welcome to my youtube channel')->after('Welcome to');
        echo $str . '<br/>';

        $str = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $str . '<br/>';

        $str = Str::of('Hello')->append(' World!!');
        echo $str . '<br/>';

        $str = Str::of('LARAVEL 8')->lower();
        echo $str . '<br/>';

        $str = Str::of('Laravel 7.0')->replace('7.0', '8.0');
        echo $str . '<br/>';

        $str = Str::of('this is a title')->title();
        echo $str . '<br/>';

        $str = Str::of('Laravel 8.0 Framework')->slug('-');
        echo $str . '<br/>';

        $str = Str::of('Laravel Framework')->substr(8);
        echo $str . '<br/>';

        $str = Str::of('Laravel Framework')->substr(8, 5);
        echo $str . '<br/>';

        $str = Str::of('/Laravel8/')->trim('/');
        echo $str . '<br/>';

        $str = Str::of('laravel 8')->upper();
        echo $str . '<br/>';
    }
}
