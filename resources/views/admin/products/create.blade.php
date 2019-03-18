<h1>Add Product</h1>

<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="name">Product Name:</label>
    <input type="text" name="name">

    <label for="img">Image:</label>
    <input type="file" name="img">

    <label for="price">Price</label>
    <input type="number" name="price">

    <label for="description">Description:</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea>

    <button type="submit">Add Product</button>


</form>