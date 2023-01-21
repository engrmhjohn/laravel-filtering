<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductFilter;

class ProductFilterController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function saveProduct(Request $request){
        $product = new ProductFilter();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->image = $this->saveImage($request);
        $product->save();
        return back();
    }
    private function saveImage($request){
        $image =  $request->file('image');
        $imageName=rand().'.'.$image->getClientOriginalExtension();
        $directory = 'adminAsset/product-image/';
        $imgUrl=$directory.$imageName;
        $image->move($directory,$imageName);
        return $imgUrl;
    }
    public function allProduct(){
        return view('all-product',[
            'all_products' => ProductFilter::all()
        ]);
    }
    public function search_products(Request $request)
    {
        $all_products = ProductFilter::whereBetween('price',[$request->left_value, $request->right_value])->get();
        return view('search_result',compact('all_products'))->render();
    }

    public function sort_by(Request $request)
    {
        if($request->sort_by == 'lowest_price'){
            $all_products = ProductFilter::orderBy('price','asc')->get();
        }
        if($request->sort_by == 'highest_price'){
            $all_products = ProductFilter::orderBy('price','desc')->get();
        }
        return view('search_result',compact('all_products'))->render();

    }
}
