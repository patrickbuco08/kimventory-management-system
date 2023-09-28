<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        ]);

        try {
            DB::beginTransaction();

            $product = Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'sku' => $request->sku,
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
}
