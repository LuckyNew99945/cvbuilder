@extends('layouts.app')

@section('content')
    <h2>User Detail</h2>

   
    
    <div class="card">
      <div class="card-body">
      <h4 class="card-title">{{$details->fullname}} {{$details->email}}{{$details->phone}} {{$details->address}} {{$details->summary}}</h4>
      <p>{{$details->summary}}</p>
     
        
        <a name="" id="" class="btn btn-primary" href="{{route('user-detail.edit', $details)}}" role="button">Edit</a>
       

        <form action="{{route('user-detail.destroy', $details)}}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-danger">
        </form>
      </div>
    </div>

    <a name="" id="" class="btn btn-primary mt-4" href="{{route('education.index')}}" role="button">Education</a>
  
@endsection