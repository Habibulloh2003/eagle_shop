<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Napa\R19\Sms;

class ProductController extends Controller
{
    public function test(){
//        $products = Product::all()->sortByDesc('id')->take(20);
        $products = Product::all();
        return view('home', ["products" => $products]);
    }

    public function index(Product $id){
        $categories = Product::all()->where('category', $id->category)->where('id', '!=', $id->id);

        return view('components.product', ["id" => $id, "products" => $categories]);
    }

    public function sendMessage($message){
        Sms::send('998933940173', $message);
        return redirect()->back();
    }
}
