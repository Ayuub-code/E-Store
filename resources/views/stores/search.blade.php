<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: black;
            color: mistyrose;
        }

        a {
            color: mintcream;
            text-decoration: none;
        }
    </style>
    <title> Search Products</title>

<body>
    @if (count($products) < 1)
        <div style="color:maroon">No results found</div>
    @else
        @foreach ($products as $product)
            <a href="{{ route('display_price', ['id' => $product->id]) }}"><br>
                {{-- <div> --}}
                {{ $product->name }}
                <br>
                {{ $product->price }}<br>
                <img src="{{ '/' . $product->cover_image }}" height="100%" width="50" style="border-radius: 10px;" />
                {{-- </div> --}}
        @endforeach
    @endif
    {{-- {{ $products->links() }} --}}
</body>
</head>

</html>
