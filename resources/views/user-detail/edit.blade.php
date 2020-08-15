@extends('layouts.app')
@section('content')
    
<div class="container">
  <h2>Tell us something about you</h2>

  
  <form action="{{route('user-detail.update', $userDetail)}}" method="POST">
    @csrf
    @method('PUT')
  <x-input name="fullname" value="{{$userDetail->fullname}}"></x-input>
    <x-input name="email" value="{{$userDetail->email}}"></x-input>
    <x-input name="phone" value="{{$userDetail->phone}}"></x-input>
    <x-input name="address" value="{{$userDetail->address}}"></x-input>

  <textarea class="form-control" name="summary" id="" cols="30" rows="4">{{$userDetail->summary}}</textarea>
  
  
  
    <input type="submit" value="Submit">
  </form>
</div>




@endsection