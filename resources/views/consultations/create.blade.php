@extends('layouts.app')

@section('content')

<div class="section_form">
    <form id="consultation-form" class="feed-form" action="post">
      <input required="" placeholder="Full Name" type="text">
      <input name="phone" required="" placeholder="Contact number" type="tel" size="20">
      <input name="petName" required="" placeholder="Pet's Name" type="text">
      <button class="button_submit">BOOK</button>
    </form>
  </div>

@endsection
