@extends('layouts.app')

@section('content')
<div class="container d-flex gap-1 flex-wrap">
    @foreach ($products as $product)
    <div class="card" style="width: 18rem;">
        <img src="{{$product->images}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <p class="card-text">{{$product->description}}</p>
          <p class="card-text">{{$product->quantity}}</p>
          <p class="card-text">{{$product->price}}</p>
          <p class="card-text">{{$product->category}}</p>

        </div>
      </div>


    @endforeach

</div>
<div class="cards">
    <div class="cards-details">
      <p class="text-title">Card Title</p>
      <p class="text-body">Card Details</p>
    </div>
    <a class="cards-button" href="/consultation/">Consultation</a>
  </div>
  <div class="cards">
    <div class="cards-details">
      <p class="text-title">Card Title</p>
      <p class="text-body">Card Details</p>
    </div>
    <a class="cards-button" href="/grooming_service">Grooming</a>
  </div>
  <div class="cards">
    <div class="cards-details">
      <p class="text-title">Card Title</p>
      <p class="text-body">Card Details</p>
    </div>
    <a class="cards-button" href="/products">Products</a>
  </div>
  <div class="cards">
    <div class="cards-details">
      <p class="text-title">Card Title</p>
      <p class="text-body">Card Details</p>
    </div>
    <a class="cards-button" href="/pet_boarding">Pet Boarding</a>
  </div>


@endsection
