<h1>all products</h1>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">product</th>
        <th scope="col">description</th>
        <th scope="col">Availability</th>
        <th scope="col">handel</th>
    </tr>
    </thead>
    <tbody class="table-group-divider">
    @foreach($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name_product}}</td>
            <td>{{$product->description}}</td>

            <td></td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="{{route('product.create')}}">create product</a>
</body>
</html>
