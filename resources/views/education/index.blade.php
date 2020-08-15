@extends('layouts.app')

@section('content')
    <h2>Education Summary</h2>

    @foreach ($education as $e)
    
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{$e->degree}} {{$e->school_name}} {{$e->graduation_start_date}} {{$e->graduation_end_date}}</h4>
        
        <a name="" id="" class="btn btn-primary" href="{{route('education.edit', $e)}}" role="button">Edit</a>
       

        <form action="{{route('education.destroy', $e)}}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete" class="btn btn-danger">
        </form>
      </div>
    </div>
    
    @endforeach

  <a name="" id="" class="btn btn-primary mt-5" href="{{route('education.create')}}" role="button">Add another Education</a>
  <a name="" id="" class="btn btn-primary mt-5" href="{{route('experience.index')}}" role="button">Works</a>
@endsection