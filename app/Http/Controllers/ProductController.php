<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $products  = Product::all();
        return view('product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [ 
            'name' => 'required',
            'description' => 'required',
            'origin' => 'required',
            'category' => 'required',
            'price' => 'required',
            'qte_stock' => 'required',
        ]);

        $product =  Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'origin' => $request->origin,
            'category' => $request->category,
            'price' => $request->price,
            'qte_stock' => $request->qte_stock,
        ]);

        return view('product.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $products = Product::where('id');
        return redirect()->route('product.index', [$products ]);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [ 
            'name' => 'required',
            'description' => 'required',
            'origin' => 'required',
            'category' => 'required',
            'price' => 'required',
            'qte_stock' => 'required',
        ]);

        $product->fill($request->post())->save();

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {    
        $product->delete();
        return redirect()->route('product.index');
    }
}

?>