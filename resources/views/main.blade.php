@extends('layouts.app')
@section('content')
    <div class="container">

      <h2>Welcome to CV Builder</h2>
      
    <a href="{{route('user-detail.create')}}" role="button" class="btn btn-primary">Build Now</a>
    </div>



@endsection