<h1>create page</h1>
<form action="{{route('product.store')}}" method="post">
    @csrf
    <input type="text" name="name_product" placeholder="inter name product">
    <input type="text" name="description" placeholder="inter description">
    <button type="submit">submit</button>
</form>
