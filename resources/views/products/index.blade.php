@foreach ($products as $product)
    <li>{{ $product->name }}</li>
    <li>{{ $product->description }}</li>
    <li>{{ $product->price }}</li>
    <li>{{ $product->category }}</li>
    <li>{{ $product->id }}</li>
@endforeach

