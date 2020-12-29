<?php

namespace App\Http\Controllers;
use App\item;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $item = item::where('id', $id)->first();

        return view('detail.index', compact('item'));
    }
}
