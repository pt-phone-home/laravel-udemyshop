@include('inc.head')
<h1 class="bg-blue flex text-4xl">Cart</h1>

<div>
    In your Shopping cart you have: {{Cart::getContent()->count()}}
    {{Cart::getTotalQuantity()}}
    {{-- {{Cart::getContent()}} --}}
</div>

<div class="div">
    <table>
        <thead>
            <tr>
                <td>

                </td>
                <td>
                    Product
                </td>
                <td>
                    price
                </td>
                <td>
                    quantity
                </td>
                <td>
                    total
                </td>
            </tr>
        </thead>

        <tbody>
            @foreach(Cart::getContent() as $product)
            <tr>
                <td>
                <a href="{{route('cart.delete', ['id' => $product->id])}}">Delete</a>
                </td>
                <td>
                    {{$product->name}}
                </td>
                <td>
                    {{$product->price}}
                </td>
                <td>
                    {{$product->quantity}}
                </td>
                <td>
                    {{$product->getPriceSum()}}
                </td>
                
            </tr>
            @endforeach
            @if(Cart::getContent()->count() > 0 )
                    
            <tr>
                <td>
                    Date
                </td>
                <td>
                    {{$trip_date}}
                </td>
            </tr>
            <tr>
                <td>Time</td>
            <td>{{$trip_time}}</td>
            </tr>
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>

                </td>
                <td>
                    Total:: {{Cart::getTotal()}}
                </td>
            </tr>
        </tfoot>
    </table>
</div>
<p>
<a href="{{route('tours')}}">Continue Shopping</a>
</p>

<p><a href="{{route('cart.checkout')}}">checkout</a></p>