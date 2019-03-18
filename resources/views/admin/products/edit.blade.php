<h1>Edit Product</h1>

<form action="{{route('product.update', ['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="name">Product Name:</label>
<input type="text" name="name" value="{{$product->name}}">

    <label for="img">Image:</label>
    <input type="file" name="img">

    <label for="price">Price</label>
    <input type="number" name="price" value="{{$product->price}}">

    <label for="description">Description:</label>
    <textarea name="description" id="" cols="30" rows="10">{{$product->description}}"</textarea>

    <button type="submit">Update Product</button>


</form>