<p>Уважаемый {{$name}}</p>
<p>Ваш заказ на сумму {{$fullSum}} создан</p>

<table>
    <tbody>
    @if ( $order )
    @foreach($order->products as $product)
        <tr>
            <td>
                <a href="{{route('product',[$product->category->code, $product->code])}}">
                    <img height="56px" src="{{ Storage::url($product->img) }}">
                    <span style="padding-left: 6px"> {{$product->name}}</span>
                </a>
            </td>
            <td>
                <span class="badge">{{$product->pivot->count}}</span>
                <div class="btn-group form-inline">
                    {!! $product->description !!}
                </div>
            </td>
            <td>{{$product->price}} грн.</td>
            <td>{{$product->getPriceForCount()}} грн.</td>
        </tr>
    @endforeach
        @endif
    </tbody>
</table>