<h1 class="bg-gray">Checkout</h1>

<table>
    @foreach(Cart::getContent() as $product)
    <tr>
        <td>
            {{$product->name}}
        </td>
        <td>
           x {{$product->quantity}}
        </td>
        <td>
            {{$product->price}}
        </td>
        <td>
           € {{$product->getPriceSum()}}
        </td>

    </tr>
    @endforeach
    <tr>
        <td colspan="2">
            Total
        </td>
        <td>
            €{{Cart::getTotal()}}
        </td>
    </tr>
</table>

<p>
    You are booking this trip for the {{$trip_date}} at {{$trip_time}}
</p>

<form action="{{route('cart.checkout')}}" method="POST">
    @csrf
        <script
          src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="pk_test_V3j3INZxixok45PJnAvD2x3Z"
          data-amount="{{Cart::getTotal() * 100}}"
          data-name="Island Ferries.net"
          data-description="Island Ferries Trips"
          data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
          data-locale="auto"
          data-currency="eur">
        </script>
</form>
