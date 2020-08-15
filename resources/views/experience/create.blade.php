@extends('layouts.app')
@section('content')
    
<div class="container">
  <h2>Work Details</h2>

 
  <form action="/experience" method="POST">
    @csrf
    <input type="text" name="job_title" placeholder="job title">
  
    <input type="text" name="employer" placeholder="employer">
  
    <input type="text" name="city" placeholder="city">
  
    <input type="text" name="state" placeholder="state">

    <input type="date" name="start_date" placeholder="start date">

    <input type="date" name="end_date" placeholder="end date">

 
  
  
  
    <input type="submit" value="Save Experience">
  </form>
</div>




@endsection