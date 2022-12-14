<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->get();
        $product = new Product();

        return view('product.create', compact('categories', 'product', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Category $category)
    {
        $data = $this->validate($request, [
            'price' => 'required|integer',
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required|max:200'
        ]);

        $image = $request->file('img');
        $photo = $image->path();
        $image->storeAs('public/uploads', $photo);

        $data['img'] = $photo;

        $product = new Product();
        $product->fill($data);
        $product->save();
        return redirect()
            ->route('categories.show', $category);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, Product $product)
    {
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->get();

        return view('product.show', compact('categories', 'product', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, Product $product)
    {
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->get();

        return view('product.edit', compact('category', 'categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, Product $product)
    {
        $data = $this->validate($request, [
            'price' => 'required|integer',
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required|max:200'
        ]);

        $image = $request->file('img');
        $photo = $image->path() . $image->getClientOriginalExtension();

        unlink(public_path("storage/uploads{$product->img}"));

        $data['img'] = $photo;

        $image->storeAs('public/uploads', $photo);

        $product->fill($data);
        $product->save();
        return redirect()
            ->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('categories.index');
    }
}