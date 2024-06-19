<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit product</h1>
    <div>
        @if($errors->any())
         <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
         </ul>
            @endforeach

        @endif
    </div>



    <form  method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('PUT')
        <div>
            <label>name</label>
            <input type="text" name="name" placeholder="Nome" value="{{$product->name}}">
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}">
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="price" value="{{$product->price}}">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="description" 
             value="{{$product->description}}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>