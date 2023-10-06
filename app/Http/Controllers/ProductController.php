<?php

namespace App\Http\Controllers;

use App\Mail\ProductTransaction;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    public function showProductForm()
    {
        return view('product.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'integer|required',
            'sku' => 'string|required',
            'current_stock' => 'integer|required',
            'reorder_level' => 'integer|required',
            'location' => 'string|required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        try {
            $file = $request->file('file') ? $request->file('file')->store('pictures') : 'default_filename.jpg';
            DB::beginTransaction();
            
            $product = Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'sku' => $request->sku,
                'file' => $file,
            ]);
    
            $product->inventory()->create([
                'current_stock' => $request->current_stock,
                'reorder_level' => $request->reorder_level,
                'location' => $request->location
            ]);
    
            DB::commit();
            return redirect()->route('product.form')->with('success', 'User registered successfully');
        } catch (\Throwable $th) {
            return $th;
            return redirect()->route('product.form')->with('error', 'something went wrong');
        }
    }

    public function list()
    {

        $posts = Product::get();

        return view('product.product_list', [
            'posts' => $posts
        ]);

        return dd('$posts');
    }

    

    public function product(Request $request,  Product $product)
    {

        $user = Auth::user();

        $product->transaction()->create([
            'product_id' => $request->id,
            'user_id' => $user->id,
            'quantity' => 1,
        ]);

        Mail::to($user)->send(new ProductTransaction(auth()->user(), $product));

        return back();
    }

}
