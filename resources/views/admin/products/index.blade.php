<h1>Current Product Rage</h1>

<table width="70%">
    <thead>
        <tr>
            <td>
                Image
            </td>

            <td>
                Name
            </td>

            <td>
                description
            </td>
            <td>
                Product_id
            </td>

            <td>
                price
            </td>
            <td>
                edit
            </td>
            <td>
                DELETE
            </td>
            <td>
                Add to Cart
            </td>
        </tr>
    </thead>

    <tbody>
        @foreach($products as $product)
        <tr>
            <td>
            <img src="{{$product->img}}" alt="">
            </td>
            <td>
            <a href="{{route('product.show', ['id' => $product->id])}}">{{$product->name}}</a>
            </td>
            <td>
                {{$product->description}}
            </td>
            <td>
                {{$product->id}}
            </td>
            <td>
                {{$product->price}}
            </td>
            <td>
            <a href="{{route('product.edit', ['id' => $product->id])}}"> Edit</a>
            </td>
            <td>
                Delete
            </td>
            <td width="10em">
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

