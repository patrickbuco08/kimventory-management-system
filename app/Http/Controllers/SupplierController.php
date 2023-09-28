<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function showSupplierForm()
    {
        return view('supplier.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'contact_details' => 'required|string'
        ]);

        Supplier::create([
            'name' => $request->name,
            'contact_details' => $request->contact_details,
        ]);

        return redirect()->route('supplier.form')->with('success', 'User registered successfully');
    }
}
