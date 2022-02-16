<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductTag;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(2);
        return view('Products.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('Products.newProduct', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        $product->name = $request->productName;
        $product->save();
        $id = $product->id;

        $product_tag = new ProductTag();

        foreach ($request->tag as $tag) {
            $product_tag->insert([
                'product_id' => $id,
                'tag_id' => $tag
            ]);
        }

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(int $id, Product $product)
    {
        $data = Product::tags($id);
      
        return view('Products.productDetails', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = Tag::all();
        $data = Product::tags($id);
        return view('Products.editProduct', compact('tags', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->productName;
        $product->save();

        
        $product_tag = new ProductTag();

        foreach ($request->tag as $tag) {
            $product_tag->updateOrCreate([
                'product_id' => $id,
                'tag_id' => $tag
            ]);
        }

        return redirect()->route('products.show', $id);
    }

    /**
     * Confirms that the user really wants to delete the
     * specified resource from storage.
     */
    public function remove($id)
    {
        $product = Product::query()->find($id);

        return view('Products.removeProduct', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('products.index');
    }

    public function teste()
    {
        $data = DB::table('tags')->join('product_tag', 'tags.id', '=', 'product_tag.tag_id')
        ->join('products', 'products.id', '=', 'product_tag.product_id')
        ->where('tags.id', '=' , 3)
        ->select('tags.id as tagID', 'tags.name as tagName', 'products.id as productID', 'products.name as productName')->toSql();

        return view('teste', compact('data'));
    }
}
