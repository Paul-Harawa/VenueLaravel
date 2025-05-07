<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{

    
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {

        $userId = Auth::user()->id; 


        return view('products.index', [
            'products' => Product::where('userid', $userId)->orderBy('id', 'desc')->paginate(10)
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request) : RedirectResponse
    {
       


        // $imageName = null;
        // $imagePath = null;
        // $imageExtension = null;

        // if ($request->hasFile('file')) {
        //     $image = $request->file('file');
        //     $imageExtension = $image->getClientOriginalExtension();
        //     $imageName = time() . '.' . $imageExtension;
        //     $imagePath = 'uploads/' . $imageName;
        //     $image->move(public_path('uploads'), $imageName);
        // }

        $request->validated(); 
        $data = $request->all();
        $data['image'] = $request->file('file');

        Product::create($data);

        return redirect()->route('products.index')
                ->withSuccess('New product is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product) : View
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product) : View
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product) : RedirectResponse
    {
        $product->update($request->validated());

        return redirect()->back()
                ->withSuccess('Product is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product) : RedirectResponse
    {
        $product->delete();

        return redirect()->route('products.index')
                ->withSuccess('Product is deleted successfully.');
    }
}