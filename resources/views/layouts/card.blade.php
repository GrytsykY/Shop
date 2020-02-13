{{--<div class="col-lg-3 col-md-4 col-sm-6">--}}
{{--    <div class=" thumbnail">--}}
{{--        <div class="labels">--}}
{{--            @if($product->isNew())--}}
{{--                <span class="badge badge-success">Новинка</span>--}}
{{--            @endif--}}
{{--            @if($product->isHit())--}}
{{--                <span class="badge badge-warning">Хит продаж!</span>--}}
{{--            @endif--}}
{{--            @if($product->isRecommend())--}}
{{--                <span class="badge badge-danger">Рекомендуем</span>--}}
{{--            @endif--}}

{{--        </div>--}}
{{--        <div class="img">--}}
{{--            <img src="{{ Storage::url($product->img) }}" alt="{{$product->name}}">--}}
{{--        </div>--}}
{{--        <div class="caption">--}}
{{--            <h3>{{$product->name}}</h3>--}}
{{--            <p>{{$product->price}} грн.</p>--}}
{{--            <form action="{{route('basket-add',$product)}}" method="POST">--}}
{{--                @if($product->isAvaliable())--}}
{{--                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>--}}
{{--                @else--}}
{{--                    Не доступен--}}
{{--                @endif--}}
{{--                <a href="{{route('product',[isset($category) ? $category->code:$product->category->code, $product->code])}}"--}}
{{--                   class="btn btn-default"--}}
{{--                   role="button">Подробнее</a>--}}
{{--                @csrf--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="card-deck col-xl-4 col-lg-4 col-md-6 mb-3">
    <div class="card mr-2 text-center" >
        <div class="labels">
            @if($product->isNew())
                <span class="badge badge-success">Новинка</span>
            @endif
            @if($product->isHit())
                <span class="badge badge-warning">Хит продаж!</span>
            @endif
            @if($product->isRecommend())
                <span class="badge badge-danger">Рекомендуем</span>
            @endif

        </div>
        <div class="img-thumbnail text-center">
            <img style="height: 200px; max-width: 280px" src="{{ Storage::url($product->img) }}"
                 alt="{{$product->name}}">
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->price}} грн.</p>
        </div>
        <div class="card-footer">
            <form action="{{route('basket-add',$product)}}" method="POST">
                @if($product->isAvaliable())
                    <button type="submit" class="btn btn-primary btn-sm" role="button">В корзину</button>
                @else
                    Не доступен
                @endif
                <a href="{{route('product',[isset($category) ? $category->code:$product->category->code, $product->code])}}"
                   class="btn btn-info btn-sm"
                   role="button">Подробнее</a>
                @csrf
            </form>
        </div>
    </div>

</div>