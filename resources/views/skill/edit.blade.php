@extends('layouts.app')
@section('content')
    
<div class="container">
  <h2>Edit Skills Details</h2>

 
  <form action="{{route('skill.update', $skill)}}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" placeholder="name" value={{$skill->name}}>
  
    <input type="text" name="rating" placeholder="rating" value={{$skill->rating}}>

 
  
  
  
    <input type="submit" value="Save">
  </form>
  
</div>




@endsection