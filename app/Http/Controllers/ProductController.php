<?php

namespace App\Http\Controllers;
use App\item;
use App\transaction;
use App\transaction_detail;
use App\user;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = Auth::user()->id;
        $transaction = transaction::where('user_id', $id)->first();

        return view('cart', compact('transaction'));
    }

    public function pesan(Request $request, $id)
    {
        $item = item::where('id', $id)->first();
        $tanggal = Carbon::now();

        if($request->order_qty > $item->stock)
        {
            return redirect('pesan/'.$id);
        }

        $cek = transaction::where('user_id', Auth::user()->id)->where('status', 0)->first();

        if(empty($cek))
        {
            $transaction = new transaction;
            $transaction->user_id = Auth::user()->id;
            $transaction->tanggal = $tanggal;
            $transaction->status = 0;
            $transaction->total_price = $item->price*$request->order_qty;
            $transaction->save();
        }

        $transaction_baru = transaction::where('user_id', Auth::user()->id)->where('status', 0)->first();

        $transaction_detail = new transaction_detail;
        $transaction_detail->item_id = $item->id;
        $transaction_detail->transaction_id = $transaction_baru->id;
        $transaction_detail->amount = $request->order_qty;
        $transaction_detail->amount_price = $item->price*$request->order_qty;
        $transaction_detail->save();        

        return redirect('cart');
    }
}
