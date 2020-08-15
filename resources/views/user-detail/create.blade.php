@extends('layouts.app')
@section('content')
    
<div class="container">
  <h2>Tell us something about you</h2>

  
  <form action="/user-detail" method="POST">
    @csrf

  {{-- @include('partials.form.input',['name'=>'fullname'])
  @include('partials.form.input',['name'=>'email'])
  @include('partials.form.input',['name'=>'phone'])
  @include('partials.form.input',['name'=>'address']) Partial --}}

    <x-input name="fullname"></x-input>
    <x-input name="email"></x-input>
    <x-input name="phone"></x-input>
    <x-input name="address"></x-input>

    <br>
  
    <textarea class="form-control"name="summary" id="" cols="100" rows="5"></textarea>
    <br>
  
  
  
   
    <input type="submit" value="Submit">
  </form>
</div>




@endsection