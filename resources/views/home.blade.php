@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-details">
      <p class="text-title">Card Title</p>
      <p class="text-body">Card Details</p>
    </div>
    <a class="card-button" href="/consultation/">Consultation</a>
  </div>
  <div class="card">
    <div class="card-details">
      <p class="text-title">Card Title</p>
      <p class="text-body">Card Details</p>
    </div>
    <a class="card-button" href="/grooming_service">Grooming</a>
  </div>
  <div class="card">
    <div class="card-details">
      <p class="text-title">Card Title</p>
      <p class="text-body">Card Details</p>
    </div>
    <a class="card-button" href="/products">Products</a>
  </div>
  <div class="card">
    <div class="card-details">
      <p class="text-title">Card Title</p>
      <p class="text-body">Card Details</p>
    </div>
    <a class="card-button" href="/pet_boarding">Pet Boarding</a>
  </div>


@endsection
