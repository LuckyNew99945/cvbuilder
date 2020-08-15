@extends('layouts.app')

@section('content')
    <h2>Skill Summary</h2>

    @foreach ($skills as $e)
    
    <div class="card">
      <div class="card-body">
      <h4 class="card-title">{{$e->name}} {{$e->rating}}</h4>
     
        
        <a name="" id="" class="btn btn-primary" href="{{route('skill.edit', $e)}}" role="button">Edit</a>
       

        <form action="{{route('skill.destroy', $e)}}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-danger">
        </form>
      </div>
    </div>
    
    @endforeach

  <a name="" id="" class="btn btn-primary mt-5" href="{{route('skill.create')}}" role="button">Add another Skill</a>
@endsection