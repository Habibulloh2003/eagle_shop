<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Napa\R19\Sms;

class ProductController extends Controller
{
    public function test(){
        $products = Product::all()->sortByDesc('id')->take(20);
        $homes = Product::all()->where('category', 'home')->sortByDesc('id')->take(8);
        $pets = Product::all()->where('category', 'pets')->sortByDesc('id')->take(8);
        $electronics = Product::all()->where('category', 'electronics')->sortByDesc('id')->take(8);
        $cars = Product::all()->where('category', 'cars')->sortByDesc('id')->take(8);
        $sport = Product::all()->where('category', 'sport')->sortByDesc('id')->take(8);
        $dresses = Product::all()->where('category', 'dresses')->sortByDesc('id')->take(8);


        return view('home', [
            "products" => $products,
            "homes" => $homes,
            "pets" => $pets,
            "electronics" => $electronics,
            "cars" => $cars,
            "sports" => $sport,
            "dresses" => $dresses,
        ]);
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
