<h1>Irelands Eye Tour</h1>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sequi asperiores amet optio quae doloribus id, possimus ad illum ut.</p>

<form action="{{route('cart.add')}}" method="POST">

    @csrf
    
        
   
    <div>
        {{$products->all()[0]->name}}
        {{$products->all()[0]->description}}
        <label for="adult_quantity"></label>
        <input type="number" name="adult_quantity">
        <input type="hidden" name="adult_product_id" value="{{$products->all()[0]->id}}">   
    </div>
    <div>
        {{$products->all()[1]->name}}
        {{$products->all()[1]->description}}
        {{$products->all()[1]->price}}
        <label for="child_quantity"></label>
        <input type="number" name="child_quantity">
        <input type="hidden" name="child_product_id" value="{{$products->all()[1]->id}}">   
    </div>
    <div>
        {{$products->all()[2]->name}}
        {{$products->all()[2]->description}}
        {{$products->all()[2]->price}}
        <label for="family_1_quantity"></label>
        <input type="number" name="family_1_quantity">
        <input type="hidden" name="family_1_product_id" value="{{$products->all()[2]->id}}">   
    </div>
    <div>
        {{$products->all()[3]->name}}
        {{$products->all()[3]->description}}
        {{$products->all()[3]->price}}
        <label for="family_2_quantity"></label>
        <input type="number" name="family_2_quantity">
        <input type="hidden" name="family_2_product_id" value="{{$products->all()[3]->id}}">   
    </div>
    <div>
    <label for="date">Date</label>
    <input type="date" name="date">
    </div>
    <div>
        <label for="time">Time</label>
        <input type="time" name="time">
    </div>


    <button type="submit">Add to Cart</button>

</form>


<a href="{{route('products.index')}}">Back</a>