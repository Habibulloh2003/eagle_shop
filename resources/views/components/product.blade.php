@extends('layouts.app')
@section('content')
    <div class="main-wrapper w-full flex bg-white rounded-md py-5 px-5 justify-around items-center mb-4">
        <div class="flex w-80 h-auto">
            <img src="{{asset($id->img)}}" alt="" class="product-img w-50 h-auto">
        </div>
        <div class="flex flex-col justify-content-around">
            <h1>title: {{$id->title}}</h1>
            <p class="text-center">description: {{$id->descr}}</p>
            <span class=""><i class="far fa-shopping-cart"></i>purchses: {{$id->count_purchses}}</span>
            <span class=""><i class="far fa-thumbs-up"></i>likes: {{$id->likes}}</span>
            <span class=""><i class="far fa-money-bill"></i>price: {{$id->price}}</span>
        </div>
    </div>
    <div class="main-wrapper w-full flex flex-col bg-white rounded-md py-5 px-5">
        <h2 class="self-center text-xl w-max mb-3">Similar products</h2>
        <div class="flex justify-around items-center flex-wrap">
            @foreach($products as $product)
                <a href="/product/{{$product->id}}">
                    <div class="product-card flex flex-col items-center justify-between bg-green-100 rounded px-1 py-1 hover:scale-110 transition ease-in duration-300 mb-2" style="filter: drop-shadow(0px 4px 15px rgba(0, 0, 0, 0.25));">
                        <div class="img overflow-hidden">
                            <img src="{{asset($product->img)}}" alt="">
                        </div>
                        <div class="flex flex-col items-center w-full">
                            <h1>{{$product->title}}</h1>
                            <p class="text-center">{{$product->descr}}</p>
                            <div class="w-full flex items-center justify-between px-0.5">
                                <span class=""><i class="far fa-shopping-cart"></i>{{$product->count_purchses}}</span>
                                <span class=""><i class="far fa-thumbs-up"></i>{{$product->likes}}</span>
                                <span class=""><i class="far fa-money-bill"></i>{{$product->price}}</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
