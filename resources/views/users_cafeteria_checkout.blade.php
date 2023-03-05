<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
</head>

<body>
@include("layouts/navbar-user")
<h1>Check Order</h1>
<form action="/cafeteria/checkout" method="POST">
    @csrf
    <ul>
        <!-- @foreach ($selected_products as $sp)
        <li>{{$sp -> name}}: ₱{{$sp -> price}}</li>
        @endforeach -->
        @for ($i = 0; $i < count($products); $i++)
        <p hidden>
            {{$input = $request->input('order_' . $products[$i] -> product_id)}}
        </p>
        @if ($input > 0)
            <li>{{$products[$i]->name}}: {{$input}} (₱{{$products[$i]->price * $input}})</li>
        @endif
        <input type="text" name="order_{{$products[$i]->product_id}}" value="{{$input}}" hidden/>
        
        @endfor
        <p>Total order is ₱{{$total}}</p>
        <button type="submit">Place order</button>
    </ul>
</form>
</body>

</html>