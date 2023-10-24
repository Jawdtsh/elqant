<h1>edite page</h1>
<form action="{{route('product.update',$product->id)}}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name_product" value="{{$product->name_product}}">
    <input type="text" name="description" value="{{$product->description}}">
    <button type="submit">submit</button>
</form>
