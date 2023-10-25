@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

<section class="section_form">
    <form id="consultation-form" class="feed-form" action="post">
      <input name="fullname" required="" placeholder="Full Name" type="text">
      <input name="contactnumber" required="" placeholder="Contact number" type="tel" size="20">
      <input name="petName" required="" placeholder="Pet's Name" type="text">
      <button class="button_submit">BOOK</button>
    </form>
</section>

@endsection
