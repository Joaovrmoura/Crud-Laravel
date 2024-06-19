<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create product</h1>
    <div>
        @if($errors->any())
         <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
         </ul>
            @endforeach

        @endif
    </div>



    <form  method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label>name</label>
            <input type="text" name="name" placeholder="Nome">
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty">
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="price">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="description">
        </div>
        <div>
            <input type="submit" value="save a New Product">
        </div>
    </form>
</body>
</html>