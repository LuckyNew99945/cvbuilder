@props(['name', 'type'=>'text', 'value' => null])

<div class="form-group">
  <label for="{{$name}}">{{ucfirst($name)}}</label>
<input type="text" name="{{$name}}" class="form-control" placeholder="{{ucfirst($name)}}" value= "{{$value}}"
>
</div>