@extends('layouts.app')

@section('content')
    <h2>Work Summary</h2>

    @foreach ($experiences as $e)
    
    <div class="card">
      <div class="card-body">
      <h4 class="card-title">{{$e->job_title}} {{$e->start_date}} to {{$e->end_date}} </h4>
      <ul>
        <li>{{$e->employer}}</li>
        <li>{{$e->city}}</li>
        <li>{{$e->state}}</li>
      </ul>
        
        <a name="" id="" class="btn btn-primary" href="{{route('experience.edit', $e)}}" role="button">Edit</a>
       

        <form action="{{route('experience.destroy', $e)}}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-danger">
        </form>
      </div>
    </div>
    
    @endforeach

  <a name="" id="" class="btn btn-primary mt-5" href="{{route('experience.create')}}" role="button">Add another Experience</a>
  <a name="" id="" class="btn btn-primary mt-5" href="{{route('skill.index')}}" role="button">Skills</a>
@endsection