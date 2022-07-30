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
<!--    <div class="product-card flex flex-col items-center w-1/5 bg-green-100 rounded px-1 py-1 hover:scale-110 transition ease-in duration-300" style="filter: drop-shadow(0px 4px 15px rgba(0, 0, 0, 0.25));">
        <div class="img overflow-hidden">
            <img src="./img/logo.png" alt="">
        </div>
        <h1>title</h1>
        <p class="text-center">efbfkebfekfjsnef ef sefkbsekjfbsekf esfbsef efbsef fsea fksdfvbs vsk vesfeskjbfsbef e sfefkbsfabes
        </p>
    </div>
    <div class="product-card flex flex-col items-center w-1/5 bg-green-100 rounded px-1 py-1 hover:scale-110 transition ease-in duration-300" style="filter: drop-shadow(0px 4px 15px rgba(0, 0, 0, 0.25));">
        <div class="img overflow-hidden">
            <img src="./img/logo.png" alt="">
        </div>
        <h1>title</h1>
        <p class="text-center">efbfkebfekfjsnef ef sefkbsekjfbsekf esfbsef efbsef fsea fksdfvbs vsk vesfeskjbfsbef e sfefkbsfabes
        </p>
    </div>
    <div class="product-card flex flex-col items-center w-1/5 bg-green-100 rounded px-1 py-1 hover:scale-110 transition ease-in duration-300" style="filter: drop-shadow(0px 4px 15px rgba(0, 0, 0, 0.25));">
        <div class="img overflow-hidden">
            <img src="./img/logo.png" alt="">
        </div>
        <h1>title</h1>
        <p class="text-center">efbfkebfekfjsnef ef sefkbsekjfbsekf esfbsef efbsef fsea fksdfvbs vsk vesfeskjbfsbef e sfefkbsfabes
        </p>
    </div>-->
</div>
