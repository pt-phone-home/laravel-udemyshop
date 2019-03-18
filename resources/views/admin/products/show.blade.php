<div>{{$product->name}}</div>
<div>{{$product->description}}</div>
<div>{{$product->price}}</div>
<form action="{{route('cart.add')}}" method="POST">

    @csrf
    <div>
    <label for="quantity">Quantity</label>
    <input type="text" name="quantity">
<input type="hidden" name="product_id" value="{{$product->id}}">
    </div>

    <button type="submit">Add to Cart</button>

</form>


<a href="{{route('products.index')}}">Back</a>