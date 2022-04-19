<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function homePage(){
        $products = Product::all();
        $category = Category::all();
        $totalCart = Cart::where('user_id',Session::get('user_id'))->count();
        //print_r($totalCart); die();
        return view('index')
            ->with(compact('products','category','totalCart'));
    }

    public function searchTerm(Request $request){
        
        $totalCart = Cart::where('user_id',Session::get('user_id'))->count();
        $category = Category::all();
        $products = Product::where('product_name','like','%'.$request->search.'%')->get();
        return view('index')
            ->with(compact('products','category','totalCart'));;
    }

    public function addtocart(Request $request){
        // print_r($_GET);
        // echo Session::get('user_id');
        $edu = new Cart();
        $edu->user_id = Session::get('user_id');
        $edu->product_id = $request->id;
        $edu->quantity = 1;
        $edu->product_name = 'kicunah';
        
        $edu->save();
        return redirect()->back()->withInput()->with(['success' => 'Added Success']);
    }

    public function cart(){
        $cart = DB::table('cart')
        ->join('product', 'product.product_id', '=', 'cart.product_id')
        ->where('cart.user_id',Session::get('user_id'))->get();
        //print_r($cart); die();
        $totalCart = Cart::where('user_id',Session::get('user_id'))->count();
        return view('cart')
            ->with(compact('cart','totalCart'));
    }
}
