<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cocktail;

class DetailController extends Controller
{
    public function index(){
        $cocktails = Cocktail::get();
        return inertia('Details',[
            'cocktails' => $cocktails
        ]);
    }
}
