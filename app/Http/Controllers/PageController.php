<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cocktail;

class PageController extends Controller
{
    public function home(){
        return inertia('Home');
    }
    public function cocktails(){
        $cocktails = Cocktail::get();
        return inertia('Cocktails',[
            'cocktails' => $cocktails
        ]); 
    }
    public function beers(){
        return inertia('Beers');
    }
}
