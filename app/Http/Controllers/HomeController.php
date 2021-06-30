<?php

namespace App\Http\Controllers;

use App\Models\beer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    function show() {
        $beers = Beer::whereActive(true)->get();
        return view('home', [
            'beers' => $beers,
        ]);
    }
}
