<div class="flex justify-around items-center flex-wrap">
    @foreach($electronics as $electronic)
        <a href="/product/{{$electronic->id}}">
            <div class="product-card flex flex-col items-center justify-between bg-green-100 rounded px-1 py-1 hover:scale-110 transition ease-in duration-300 mb-2" style="filter: drop-shadow(0px 4px 15px rgba(0, 0, 0, 0.25));">
                <div class="img overflow-hidden">
                    <img src="{{asset($electronic->img)}}" alt="">
                </div>
                <div class="flex flex-col items-center w-full">
                    <h1>{{$electronic->title}}</h1>
                    <p class="text-center">{{$electronic->descr}}</p>
                    <div class="w-full flex items-center justify-between px-0.5">
                        <span class=""><i class="far fa-shopping-cart"></i>{{$electronic->count_purchses}}</span>
                        <span class=""><i class="far fa-thumbs-up"></i>{{$electronic->likes}}</span>
                        <span class=""><i class="far fa-money-bill"></i>{{$electronic->price}}</span>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
</div>


