<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth;

class ItemController extends Controller
{
    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
       
        DB::table('items')->insert([
            'user_id' => Auth::user()->id,
            'item_name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'stock' => $request->stock
        ]);

        return view('home');
    }
}
