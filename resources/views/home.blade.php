@extends('layouts.app')

@section('content')

<div class="cards">
    <div class="cards-details">
      <p class="text-title">Card Title</p>
      <p class="text-body">Card Details</p>
    </div>
    <a class="cards-button" href="/consultation">Consultation</a>
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
