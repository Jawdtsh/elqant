<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(): Application|Factory|View
    {
        $products = Product::all();
        return view('product.all_products',compact('products'));
    }


    public function create(): View|Factory|Application
    {

        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {

        Product::create($request->all());
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return string
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edite',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(Request $request,  $id)
    {
        $product = Product::findorfail($id);
        $product->update($request->all());
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $product = Product::where('id',$id)->delete();
        return redirect()->route('product.index');
    }
    public function forcdelete($id)
    {
        Product::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->back();
    }
    public function showme(): Factory|View|Application
    {
        $products = Product::onlyTrashed()->get();
        return view('product.only_trashed',compact('products'));
    }
    public function restore($id): RedirectResponse
    {
        Product::onlyTrashed()->where('id',$id)->restore();
        return redirect()->back();
    }
}
