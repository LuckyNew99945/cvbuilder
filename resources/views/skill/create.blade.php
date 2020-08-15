@extends('layouts.app')
@section('content')
    
<div class="container">
  <h2>Skills Details</h2>

 
  <form action="/skill" method="POST">
    @csrf

    <input type="text" name="name" placeholder="name">
  
    <input type="text" name="rating" placeholder="rating">
  

  
    <input type="submit" value="Save">
  </form>
  <a name="" id="" class="btn btn-primary mt-5" href="{{route('skill.index')}}" role="button">Skills</a>
</div>




@endsection