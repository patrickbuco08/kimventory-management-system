<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;


class TransactionController extends Controller
{
    public function index(){

        $post = Product::get();
        
        return view('transactions.transaction', [
            'posts' => $post
        ]);
    }   

    public function store(Request $request)
    {
        $request->validate([
            "product_id"  =>"required",
            'transaction' => 'required',
            'quantity'  => 'required',
            "user_id"  =>"required",
            'date' => 'required',
        ]);


        Transaction::create([
            'product_id' => $request->product_id,
            'transaction' => $request->transaction,
            'quantity' => $request->quantity,
            'user_id' => $request->user_id,
            'date' => $request->date,
        ]);

        return back();


    }
}
