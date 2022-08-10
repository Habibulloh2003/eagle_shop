<div class="flex justify-around items-center flex-wrap">
    @foreach($homes as $home)
        <a href="/product/{{$home->id}}">
            <div class="product-card flex flex-col items-center justify-between bg-green-100 rounded px-1 py-1 hover:scale-110 transition ease-in duration-300 mb-2" style="filter: drop-shadow(0px 4px 15px rgba(0, 0, 0, 0.25));">
                <div class="img overflow-hidden">
                    <img src="{{asset($home->img)}}" alt="">
                </div>
                <div class="flex flex-col items-center w-full">
                    <h1>{{$home->title}}</h1>
                    <p class="text-center">{{$home->descr}}</p>
                    <div class="w-full flex items-center justify-between px-0.5">
                        <span class=""><i class="far fa-shopping-cart"></i>{{$home->count_purchses}}</span>
                        <span class=""><i class="far fa-thumbs-up"></i>{{$home->likes}}</span>
                        <span class=""><i class="far fa-money-bill"></i>{{$home->price}}</span>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
</div>


